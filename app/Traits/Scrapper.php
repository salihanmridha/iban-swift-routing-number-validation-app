<?php

namespace App\Traits;

use Illuminate\Support\Collection;
use Symfony\Component\HttpFoundation\Response;

trait Scrapper
{
    private static $scrapingBeeUrl = "https://app.scrapingbee.com/api/v1/";

    /**
     * @param $number
     * @param $url
     * @return array
     */
    public function phpScrapper($number, $url, $inputContent): array
    {
        $request = array(
            'http' => array(
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'method' => 'POST',
                'content' => http_build_query(array(
                    $inputContent => $number
                ))
            )
        );

        $context = stream_context_create($request);

        $html = file_get_contents($url, true, $context);

        return $this->format($this->getHtmlByTagName($html, "th"), $this->getHtmlByTagName($html, "td"));
    }

    /**
     * @param string $number
     * @param string $url
     * @param string $wait_for
     * @param string $fill
     * @param string $click
     * @return array
     */
    public function scrapingBee(string $number, string $url, string $wait_for, string $fill, string $click): array
    {
        $url = urlencode($url);

        $jsScenario = [
            "instructions" => [
                ["wait_for" => $wait_for],
                ['fill' => [$fill, $number]],
                ["click" => $click]
            ],
        ];

        $jsScenario = json_encode($jsScenario, true);
        $jsScenario = urlencode($jsScenario);

        $response = $this->curlRequestToScrapingBee($url, $jsScenario);

        return $this->format($this->getHtmlByTagName($response, "th"), $this->getHtmlByTagName($response, "td"));


    }

    /**
     * @param $th
     * @param $td
     * @return array
     */
    private function format($th, $td)
    {
        $result = [];
        $aTableHeaderHTML = [];

        foreach($th as $heading)
        {
            if (in_array(trim($heading->textContent), $aTableHeaderHTML)){
                $aTableHeaderHTML[] = "breakdown " . trim($heading->textContent);
            } else {
                $aTableHeaderHTML[] = trim($heading->textContent);
            }
        }

        $i = 0;
        foreach($td as $content)
        {
            $thAsKey = strtolower($aTableHeaderHTML[$i]);

            $thAsKey = preg_replace('/[^a-zA-Z0-9.]/', '', $thAsKey);

            $result[$thAsKey] = trim($content->textContent);

            $i = $i + 1;
        }

        return $result;
    }

    private function curlRequestToScrapingBee(string $url, string $jsScenario)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, self::$scrapingBeeUrl . "?api_key=" . config('app.scraping_bee_api')
            . "&url=$url&js_scenario=$jsScenario");

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);

        if (!$response) {
            abort(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        curl_close($ch);

        return $response;
    }

    private function getHtmlByTagName($response, $tagName)
    {
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($response);
        libxml_use_internal_errors(false);

        return $dom->getElementsByTagName($tagName);
    }
}

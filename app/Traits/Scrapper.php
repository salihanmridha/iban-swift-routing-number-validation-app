<?php

namespace App\Traits;

use Illuminate\Support\Collection;

trait Scrapper
{
    /**
     * @param $number
     * @param $url
     * @return array
     */
    public function scrapper($number, $url)
    {
        $request = array(
            'http' => array(
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'method' => 'POST',
                'content' => http_build_query(array(
                    'routing' => $number
                ))
            )
        );

        $context = stream_context_create($request);

        $html = file_get_contents($url, true, $context);

        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($html);
        libxml_use_internal_errors(false);

        $th = $dom->getElementsByTagName('th');
        $td = $dom->getElementsByTagName('td');

        return $this->format($th, $td);
    }

    /**
     * @param $th
     * @param $td
     * @return array
     */
    public function format($th, $td)
    {
        $result = [];

        foreach($th as $heading)
        {
            $aTableHeaderHTML[] = trim($heading->textContent);
        }

        $i = 0;
        foreach($td as $content)
        {
            $thAsKey = strtolower(str_replace(' ', '_', $aTableHeaderHTML[$i]));
            $result[$thAsKey] = trim($content->textContent);
            $i = $i + 1;
        }

        $result = $result;

        return $result;
    }
}

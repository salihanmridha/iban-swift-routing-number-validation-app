<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoutingNumberVerificationRequest;
use App\Http\Resources\RoutingNumberVerificationResource;
use App\Models\RoutingNumber;
use Illuminate\Http\JsonResponse;
use App\Traits\Scrapper;
use App\Traits\ResponseJson;
use Symfony\Component\HttpFoundation\Response;

class RoutingNumberVerificationController extends Controller
{
    use Scrapper, ResponseJson;

    const THESWIFTCODES = 'https://www.theswiftcodes.com/routing-number-checker/';
    const BANKCODES = 'https://bank.codes/us-routing-number-checker/';

    /**
     * @param RoutingNumberVerificationRequest $request
     * @return JsonResponse
     */
    public function store(RoutingNumberVerificationRequest $request): \Illuminate\Http\JsonResponse
    {
        $routingNumber = RoutingNumber::firstWhere("routing_number", $request->number);

        if ($routingNumber && $routingNumber->success == true){
            return $this->data(
                Response::HTTP_OK,
                true,
                "Routing Bank $routingNumber->routing_number is valid",
                new RoutingNumberVerificationResource($routingNumber));
        }

        if ($routingNumber && $routingNumber->success == false){
            return $this->data(
                Response::HTTP_NOT_FOUND,
                false,
                "The Routing Number that you entered does not exist in our database. Please try again.",
                null);
        }

//        $fetch = $this->scrapingBee(
//            $request->number,
//            self::BANKCODES,
//            "input[name=routing]",
//            "input[name=routing]",
//            "input[type=submit]"
//        );

        $fetch = $this->phpScrapper($request->number, self::THESWIFTCODES, 'routing');

        if(count($fetch) > 0 && array_key_exists("routingnumber", $fetch) && array_key_exists("bank", $fetch)){
            $routingNumber = RoutingNumber::create([
                "routing_number" => $fetch["routingnumber"],
                "date_of_revision" => $fetch["dateofrevision"] ?? null,
                "new_routing_number" => $fetch["newroutingnumber"] ?? null,
                "bank" => $fetch["bank"],
                "address" => $fetch["address"] ?? null,
                "city" => $fetch["city"] ?? null,
                "state" => $fetch["state"] ?? null,
                "zip" => $fetch["zip"] ?? null,
                "phone" => $fetch["phone"] ?? null,
            ]);
            return $this->data(
                Response::HTTP_OK,
                true,
                "Routing Bank $routingNumber->routing_number is valid",
                new RoutingNumberVerificationResource($routingNumber));
        }

        RoutingNumber::create([
            "routing_number" => $request->number,
            "success" => false
        ]);

        return $this->data(
            Response::HTTP_NOT_FOUND,
            false,
            "The Routing Number that you entered does not exist in our database. Please try again.",
            null);
    }



}

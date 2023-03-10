<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoutingNumberVerificationRequest;
use App\Http\Requests\SwiftCodeVerificationRequest;
use App\Http\Resources\RoutingNumberVerificationResource;
use App\Http\Resources\SwiftCodeVerificationResource;
use App\Models\SwiftCode;
use Illuminate\Http\JsonResponse;
use App\Traits\Scrapper;
use App\Traits\ResponseJson;
use Symfony\Component\HttpFoundation\Response;

class SwiftCodeVerificationController extends Controller
{
    use Scrapper, ResponseJson;

    const BANKCODES = 'https://bank.codes/swift-code-checker/';
    const THESWIFTCODES = 'https://www.theswiftcodes.com/swift-code-checker/';

    public function store(SwiftCodeVerificationRequest $request): \Illuminate\Http\JsonResponse
    {
        $swiftCode = SwiftCode::firstWhere("swift_code", $request->code);

        if ($swiftCode && $swiftCode->success == true){
            return $this->data(
                Response::HTTP_OK,
                true,
                "SWIFT code $swiftCode->swift_code is valid",
                new SwiftCodeVerificationResource($swiftCode));
        }

        if ($swiftCode && $swiftCode->success == false){
            return $this->data(
                Response::HTTP_NOT_FOUND,
                false,
                "The SWIFT code that you entered is invalid. Please try again.",
                null);
        }

//        $fetch = $this->scrapingBee(
//            $request->code,
//            self::BANKCODES,
//            "input[name=swift]",
//            "input[name=swift]",
//            "input[type=submit]"
//        );

        $fetch = $this->phpScrapper($request->code, self::THESWIFTCODES, 'swift');

        if(count($fetch) > 0 && array_key_exists("swiftcode", $fetch)){
            $swiftCode = SwiftCode::create([
                "swift_code" => $request->code,
                "bank" => $fetch["bankinstitution"],
                "city" => $fetch["city"] ?? null,
                "branch" => $fetch["branchname"] ?? null,
                "address" => $fetch["address"] ?? null,
                "post_code" => $fetch["postcode"] ?? null,
                "country" => $fetch["country"] ?? null,
                "country_code" => substr($fetch["countrycode"], 0, 2) ?? null,
                "breakdown_swift_code" => $fetch["swiftcode"] ?? null,
                "breakdown_bank_code" => $fetch["bankcode"] ?? null,
                "breakdown_country_code" => $fetch["countrycode"] ?? null,
                "breakdown_location_code" => $fetch["locationstatus"] ?? null,
                "breakdown_code_status" => $fetch["connection"] ?? null,
                "breakdown_branch_code" => $fetch["branchcode"] ?? null,
            ]);
            return $this->data(
                Response::HTTP_OK,
                true,
                "SWIFT code $swiftCode->swift_code is valid",
                new SwiftCodeVerificationResource($swiftCode));
        }

        SwiftCode::create([
            "swift_code" => $request->code,
            "success" => false
        ]);

        return $this->data(
            Response::HTTP_NOT_FOUND,
            false,
            "The SWIFT code that you entered is invalid. Please try again.",
            null);
    }
}

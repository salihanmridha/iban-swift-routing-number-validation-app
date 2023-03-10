<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\IbanNumberVerificationRequest;
use App\Http\Resources\IbanNumberVerificationResource;
use App\Models\IbanNumber;
use App\Models\SwiftCode;
use App\Traits\ResponseJson;
use App\Traits\Scrapper;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IbanNumberVerificationController extends Controller
{
    use Scrapper, ResponseJson;

    const THESWIFTCODES = 'https://www.theswiftcodes.com/swift-code-checker/';
    const THESWIFTCODESFORIBAN = 'https://www.theswiftcodes.com/iban-checker/';

    public function store(IbanNumberVerificationRequest $request)
    {
        $iban = IbanNumber::firstWhere("iban", $request->number);

        if ($iban && $iban->success == true){
            return $this->data(
                Response::HTTP_OK,
                true,
                $iban->iban . " is a valid IBAN",
                new IbanNumberVerificationResource($iban));
        }

        if ($iban && $iban->success == false){
            return $this->data(
                Response::HTTP_NOT_FOUND,
                false,
                $request->number . " is an invalid IBAN",
                null);
        }

        $fetch = $this->phpScrapper($request->number, self::THESWIFTCODESFORIBAN, 'iban');

        if(count($fetch) > 0 && array_key_exists("bban", $fetch)){
            $swift = null;
            if(array_key_exists("swift_code", $fetch)){
                $swift = $this->getSwiftDetails($fetch["swift_code"]);
            }

            $iban = IbanNumber::create([
                "iban" => $request->number,
                "country" => $fetch["country"],
                "sepa_country" => $fetch["sepacountry"] ?? null,
                "checksum" => $fetch["checksum"] ?? null,
                "bban" => $fetch["bban"] ?? null,
                "bank_code" => $fetch["bankcode"] ?? null,
                "account_number" => $fetch["accountnumber"] ?? null,
                "branch_code" => $fetch["branchcode"] ?? null,
                "check_digit" => $fetch["checkdigit"] ?? null,
                "swift_code" => $swift->swift_code ?? null,
                "bank_name" => $swift->bank ?? null,
                "branch" => $swift->branch ?? null,
                "address" => $swift->address ?? null,
                "city" => $swift->city ?? null,
                "zip" => $swift->post_code ?? null
            ]);

            return $this->data(
                Response::HTTP_OK,
                true,
                $iban->iban . " is a valid IBAN",
                new IbanNumberVerificationResource($iban));
        }

        IbanNumber::create([
            "iban" => $request->number,
            "success" => false
        ]);

        return $this->data(
            Response::HTTP_NOT_FOUND,
            false,
            $request->number . " is an invalid IBAN",
            null);
    }

    private function getSwiftDetails(string $swift): ?SwiftCode
    {
        $swiftCode = SwiftCode::firstWhere("swift_code", $swift);

        if($swiftCode){
            return $swiftCode;
        }

        $fetch = $this->phpScrapper($swift, self::THESWIFTCODES, 'swift');

        if(count($fetch) > 0 && array_key_exists("swiftcode", $fetch)){
            $swiftCode = SwiftCode::create([
                "swift_code" => $swift,
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
            return $swiftCode;
        }

        return null;
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IbanNumberVerificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "iban" => $this->iban,
            "country" => $this->country,
            "sepa_country" => $this->sepa_country,
            "checksum" => $this->checksum,
            "bban" => $this->bban,
            "bank_code" => $this->bank_code,
            "branch_code" => $this->branch_code,
            "account_number" => $this->account_number,
            "check_digit" => $this->check_digit,
            "bank_details" => [
                "swift_code" => $this->swift_code,
                "bank_name" => $this->bank_name,
                "branch" => $this->branch,
                "address" => $this->address,
                "city" => $this->city,
                "zip" => $this->zip,
            ],
        ];
    }
}

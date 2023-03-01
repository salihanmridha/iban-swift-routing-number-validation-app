<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SwiftCodeVerificationResource extends JsonResource
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
            "swift_code" => $this->swift_code,
            "bank" => $this->bank,
            "city" => $this->city,
            "branch" => $this->branch,
            "address" => $this->address,
            "post_code" => $this->post_code,
            "country" => $this->country,
            "country_code" => $this->country_code,
            "breakdown" => [
                "swift_code" => $this->breakdown_swift_code,
                "bank_code" => $this->breakdown_bank_code,
                "country_code" => $this->breakdown_country_code,
                "location_code" => $this->breakdown_location_code,
                "code_status" => $this->breakdown_code_status,
                "branch_code" => $this->breakdown_branch_code,
            ],
        ];
    }
}

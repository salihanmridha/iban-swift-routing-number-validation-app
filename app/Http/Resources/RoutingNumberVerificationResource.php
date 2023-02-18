<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoutingNumberVerificationResource extends JsonResource
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
            "routing_number" => $this->routing_number,
            "date_of_revision" => $this->date_of_revision,
            "new_routing_number" => $this->new_routing_number,
            "bank" => $this->bank,
            "address" => $this->address,
            "city" => $this->city,
            "state" => $this->state,
            "zip" => $this->zip,
            "phone" => $this->phone,
        ];
    }
}

<?php

namespace App\Http\Resources\Domains;

use Illuminate\Http\Resources\Json\JsonResource;

class Domain extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'isVerified' => $this->is_verified,
        ];
    }
}

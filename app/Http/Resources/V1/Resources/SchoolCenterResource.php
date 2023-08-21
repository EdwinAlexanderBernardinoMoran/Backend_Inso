<?php

namespace App\Http\Resources\V1\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SchoolCenterResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'infraestructure_code' => $this->infraestructure_code,
            'status' => $this->status,
            'created_at' => $this->published_at
        ];
    }
}

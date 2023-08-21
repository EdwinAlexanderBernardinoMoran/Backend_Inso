<?php

namespace App\Http\Resources\V1\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
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
            'names' => $this->names,
            'lastNames' => $this->lastNames,
            'address' => $this->address,
            'dui' => $this->dui,
            'nip' => $this->nip,
            'nit' => $this->nit,
            'nup' => $this->nup,
            'career_id' => $this->career_id,
            'category_id' => $this->category_id,
            'position_id' => $this->position_id,
            'departure' => $this->departure,
            'subLevel' => $this->subLevel,
            'entryDate' => $this->entryDate,
            'status' => $this->status,
            'created_at' => $this->published_At
        ];
    }
}

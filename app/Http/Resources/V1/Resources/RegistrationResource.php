<?php

namespace App\Http\Resources\V1\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegistrationResource extends JsonResource
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
            'students_id' => $this->students_id,
            'specialties_id' => $this->specialties_id,
            'section_id' => $this->section_id,
            'sections' => $this->sections,
            'anio' => $this->anio,
            'state' => $this->state,
            'egresado' => $this->egresado,
            'status' => $this->status,
            'created_at' =>$this->published_at
        ];
    }
}

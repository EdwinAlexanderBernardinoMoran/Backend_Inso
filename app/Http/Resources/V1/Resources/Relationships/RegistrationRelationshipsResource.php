<?php

namespace App\Http\Resources\V1\Resources\Relationships;

use Illuminate\Http\Resources\Json\JsonResource;

class RegistrationRelationshipsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if($this->sections == 1){
            $sections = "A";
        }

        if($this->sections == 2){
            $sections = "B";
        }

        if($this->sections == 3){
            $sections = "C";
        }

        if($this->egresado == 1){
            $egresado = "SI";
        }

        if($this->egresado == 0){
            $egresado = "NO";
        }

        if($this->status == 1){
            $status = "SI";
        }

        if($this->status == 0){
            $status = "NO";
        }

        return [
            'id' => $this->id,
            'names' => $this->student->names.' '.$this->student->lastnames,
            'specialty' => $this->specialty->name,
            'section' => $this->section->name,
            'sections' => $sections,
            'anio' => $this->anio,
            'registrationstatus' => $this->registrationstatus->name,
            'egresado' => $egresado,
            'habilitado' => $status,
            'created_at' =>$this->published_at
        ];
    }
}

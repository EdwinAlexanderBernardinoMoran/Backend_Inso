<?php

namespace App\Http\Resources\V1\Resources\Relationships;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherRelationshipsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->status == 1){
            $status = "Activo";
        }

        if ($this->status == 0){
            $status = "Inactivo";
        }
        return [
            'id' => $this->id,
            'names' => $this->names,
            'lastNames' => $this->lastNames,
            'address' => $this->address,
            'dui' => $this->dui,
            'nip' => $this->nip,
            'nit' => $this->nit,
            'nup' => $this->nup,
            'career' => $this->career->name,
            'category' => $this->category->name,
            'position' => $this->position->name,
            'departure' => $this->departure,
            'subLevel' => $this->subLevel,
            'entryDate' => $this->entryDate,
            'status' => $status,
            'created_at' => $this->published_At
        ];
    }
}

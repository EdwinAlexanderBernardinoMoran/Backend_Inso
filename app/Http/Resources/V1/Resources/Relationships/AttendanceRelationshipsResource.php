<?php

namespace App\Http\Resources\V1\Resources\Relationships;

use Illuminate\Http\Resources\Json\JsonResource;

class AttendanceRelationshipsResource extends JsonResource
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
            'names' => $this->student->names,
            'lastnames' => $this->student->lastnames,
            'specialty' => $this->student->registrations->first()->specialty->name,
            'section' => $this->student->registrations->first()->section->name,
            'datenow' => $this->datenow,
            'timenow' => $this->timenow,
            'anio' => $this->student->registrations->first()->anio,
            'created_at' => $this->published_at
        ];
    }
}

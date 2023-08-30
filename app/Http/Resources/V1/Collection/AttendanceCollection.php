<?php

namespace App\Http\Resources\V1\Collection;

// use App\Http\Resources\V1\Resources\AttendanceResource;

use App\Http\Resources\V1\Resources\Relationships\AttendanceRelationshipsResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AttendanceCollection extends ResourceCollection
{
    // public $collects = AttendanceResource::class;
    public $collects = AttendanceRelationshipsResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'Development(Edwin Alexander Bernardino Morán)',
                'authors' => [
                    'Edwin Alexander Bernardino Morán',
                    'Development(Edwin Alexander Bernardino Morán)'
                ]
            ],
            'type' => 'Asistencias (Instituto Nacional De Sonzacate)'
        ];
    }
}

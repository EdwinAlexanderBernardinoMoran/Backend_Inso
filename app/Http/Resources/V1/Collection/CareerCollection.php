<?php

namespace App\Http\Resources\V1\Collection;

use App\Http\Resources\V1\Resources\CareerResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CareerCollection extends ResourceCollection
{
    public $collects = CareerResource::class;
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
            'type' => 'Carreras(Profesores) (Instituto Nacional De Sonzacate)'
        ];
    }
}

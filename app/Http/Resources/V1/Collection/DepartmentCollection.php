<?php

namespace App\Http\Resources\V1\Collection;

use App\Http\Resources\V1\Resources\DepartmentResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DepartmentCollection extends ResourceCollection
{
    public $collects = DepartmentResource::class;
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
            'type' => 'Departamentos (Instituto Nacional De Sonzacate)'
        ];
    }
}

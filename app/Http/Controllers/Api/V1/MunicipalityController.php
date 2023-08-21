<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMunicipalityRequest;
use App\Http\Resources\V1\Collection\MunicipalityCollection;
use App\Http\Resources\V1\Resources\MunicipalityResource;
use App\Models\Municipality;

class MunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new MunicipalityCollection(Municipality::latest()->paginate());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMunicipalityRequest $request)
    {
        Municipality::create($request->validated());

        return response()->json([
            'message' => 'Municipio Creado!'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function show(Municipality $municipality)
    {
        return new MunicipalityResource($municipality);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMunicipalityRequest $request, Municipality $municipality)
    {
        $municipality->update($request->validated());

        return response()->json([
            'message' => 'Municipio Actualizado!'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipality  $municipality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipality $municipality)
    {
        $municipality->delete();

        return response()->json([
            'message' => 'Success'
        ], 204);
    }
}

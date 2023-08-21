<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNationalityRequest;
use App\Http\Resources\V1\Collection\NationalityCollection;
use App\Http\Resources\V1\Resources\NationalityResource;
use App\Models\Nationality;

class NationalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new NationalityCollection(Nationality::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNationalityRequest $request)
    {
        Nationality::create($request->validated());

        return response()->json([
            'message' => 'Nacionalidad Creada'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function show(Nationality $nationality)
    {
        return new NationalityResource($nationality);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function update(StoreNationalityRequest $request, Nationality $nationality)
    {
        $nationality->update($request->validated());

        return response()->json([
            'message' => 'Nacionalidad Actualizada!'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nationality $nationality)
    {
        $nationality->delete();

        return response()->json([
            'message' => 'Success'
        ], 204);
    }
}

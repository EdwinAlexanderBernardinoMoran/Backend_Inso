<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSpecialtyRequest;
use App\Http\Resources\V1\Collection\SpecialtyCollection;
use App\Http\Resources\V1\Resources\SpecialtyResource;
use App\Models\Specialty;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return SpecialtyResource::collection(Specialty::latest()->paginate());
        return new SpecialtyCollection(Specialty::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreSpecialtyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpecialtyRequest $request)
    {
        Specialty::create($request->validated());

        return response()->json([
            'message' => 'Especialidad Creada'
        ], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specialty  $specialty
     * @return \Illuminate\Http\Response
     */
    public function show(Specialty $specialty)
    {
        return new SpecialtyResource($specialty);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialty  $specialty
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSpecialtyRequest $request, Specialty $specialty)
    {
        $specialty->update($request->validated());

        return response()->json([
            'message' => 'Especialidad Actualizada!'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialty  $specialty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialty $specialty)
    {
        $specialty->delete();

        return response()->json([
            'message' => 'Success'
        ], 204);
    }
}

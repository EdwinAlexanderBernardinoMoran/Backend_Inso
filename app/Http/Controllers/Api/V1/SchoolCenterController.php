<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSchoolCenterRequest;
use App\Http\Resources\V1\Collection\SchoolCenterCollection;
use App\Http\Resources\V1\Resources\SchoolCenterResource;
use App\Models\SchoolCenter;

class SchoolCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new SchoolCenterCollection(SchoolCenter::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolCenterRequest $request)
    {
        SchoolCenter::create($request->validated());

        return response()->json([
            'message' => 'Centro Escolar Creado!'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolCenter  $schoolCenter
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolCenter $schoolCenter)
    {
        return new SchoolCenterResource($schoolCenter);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SchoolCenter  $schoolCenter
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSchoolCenterRequest $request, SchoolCenter $schoolCenter)
    {
        $schoolCenter->update($request->validated());

        return response()->json([
            'message' => 'Centro Escolar Actualizado'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolCenter  $schoolCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolCenter $schoolCenter)
    {
        $schoolCenter->delete();

        return response()->json([
            'message' => 'Success'
        ], 204);
    }
}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCantonRequest;
use App\Http\Resources\V1\Collection\CantonCollection;
use App\Http\Resources\V1\Resources\CantonResource;
use App\Models\Canton;

class CantonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new CantonCollection(Canton::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCantonRequest $request)
    {
        Canton::create($request->validated());

        return response()->json([
            'message' => 'Canton Creado!'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Canton  $canton
     * @return \Illuminate\Http\Response
     */
    public function show(Canton $canton)
    {
        return new CantonResource($canton);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Canton  $canton
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCantonRequest $request, Canton $canton)
    {
        $canton->update($request->validated());

        return response()->json([
            'message' => 'Canton Actualizado!'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Canton  $canton
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canton $canton)
    {
        $canton->delete();

        return response()->json([
            'message' => 'Success'
        ], 204);
    }
}

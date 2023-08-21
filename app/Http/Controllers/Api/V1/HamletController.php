<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHamletRequest;
use App\Http\Resources\V1\Collection\HamletCollection;
use App\Http\Resources\V1\Resources\HamletResource;
use App\Models\Hamlet;
use Illuminate\Http\Request;

class HamletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new HamletCollection(Hamlet::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHamletRequest $request)
    {
        Hamlet::create($request->validated());

        return response()->json([
            'message' => 'Caserío Creado!'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hamlet  $hamlet
     * @return \Illuminate\Http\Response
     */
    public function show(Hamlet $hamlet)
    {
        return new HamletResource($hamlet);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hamlet  $hamlet
     * @return \Illuminate\Http\Response
     */
    public function update(StoreHamletRequest $request, Hamlet $hamlet)
    {
        $hamlet->update($request->validated());

        return response()->json([
            'message' => 'Caserío Actualizado!'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hamlet  $hamlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hamlet $hamlet)
    {
        $hamlet->delete();

        return response()->json([
            'message' => 'Success'
        ], 204);
    }
}

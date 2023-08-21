<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegistrationStatusRequest;
use App\Http\Resources\V1\Collection\RegistrationStatuCollection;
use App\Http\Resources\V1\Resources\RegistrationStatuResource;
use App\Models\RegistrationStatu;

class RegistrationStatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new RegistrationStatuCollection(RegistrationStatu::latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistrationStatusRequest $request)
    {
        RegistrationStatu::create($request->validated());

        return response()->json([
            'message' => 'Estado de Matricula Creado!'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrationStatu  $registrationStatu
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrationStatu $registrationStatu)
    {
        return new RegistrationStatuResource($registrationStatu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrationStatu  $registrationStatu
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRegistrationStatusRequest $request, RegistrationStatu $registrationStatu)
    {
        $registrationStatu->update($request->validated());

        return response()->json([
            'message' => 'Estado de Matricula Actualizado!'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrationStatu  $registrationStatu
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrationStatu $registrationStatu)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Resources\V1\Collection\RegistrationCollection;
use App\Http\Resources\V1\Resources\RegistrationResource;
use App\Models\Registration;
use Symfony\Component\HttpFoundation\Response;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::with('student', 'specialty', 'section', 'registrationstatus')->latest()->paginate();
        return new RegistrationCollection($registrations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistrationRequest $request)
    {

        try {
            Registration::create($request->validated());

            return response()->json([
                'message' => 'Alumno Matriculado Exitosamente !'
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        return new RegistrationResource($registration);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRegistrationRequest $request, Registration $registration)
    {
        $registration->update($request->validated());

        return response()->json([
            'message' => 'Matricula Actualizada!'
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        $registration->delete();

        return response()->json([
            'message' => 'Success'
        ], Response::HTTP_NO_CONTENT);
    }
}

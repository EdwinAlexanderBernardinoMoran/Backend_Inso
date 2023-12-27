<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttendanceRequest;
use App\Http\Resources\V1\Collection\AttendanceCollection;
use App\Http\Resources\V1\Resources\AttendanceResource;
use App\Models\Attendance;
use App\Models\Registration;
use App\Models\Student;
use Symfony\Component\HttpFoundation\Response;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendances = Attendance::with('student')->latest()->paginate();
        return new AttendanceCollection($attendances);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendanceRequest $request)
    {
        $nie = $request->input('nie');
        $student = Student::where('nie', $nie)->first();

        if ($student) {
            $registration = Registration::where('student_id', $student->id)->where('registration_status_id', '=', '2')->first();

            if ($registration) {
                $attendance = new Attendance();
                $attendance->student_id = $student->id;
                $attendance->datenow = $request->datenow;
                $attendance->timenow = $request->timenow;
                $attendance->save();

                return response()->json([
                    'message' => 'Asistencia Creada!'
                ], Response::HTTP_CREATED);
            } else {
                return response()->json([
                    'message' => 'Alumno no Matriculado!']
                , Response::HTTP_BAD_REQUEST);
            }
        } else {
            return response()->json([
                'message' => 'Alumno no Encontrado!'
            ], Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        return new AttendanceResource($attendance);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAttendanceRequest $request, Attendance $attendance)
    {
        $attendance->update($request->validated());

        return response()->json([
            'message' => 'Asistencia Actualizada!'
        ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        $attendance->delete();

        return response()->json([
            'message' => 'Success'
        ], Response::HTTP_NO_CONTENT);
    }
}

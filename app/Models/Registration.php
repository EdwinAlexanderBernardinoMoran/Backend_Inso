<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($registration){

            // Valida si el Alumno ya se ha matriculado en la Seccion.
            $existingRegistration = self::where('student_id', $registration->student_id)->where('section_id', $registration->section_id)->where('anio', $registration->anio)->first();
            if ($existingRegistration) {
                throw new \Exception("El alumno {$registration->student->names} {$registration->student->lastnames} con NIE {$registration->student->nie} ya está matriculado en la sección {$registration->section->name} en {$registration->specialty->name}");
            }

            // Valida que El alumno no pueda matricularse dos veces en el mismo año.
            $existingRegistrationAnio = self::where('student_id', $registration->student_id)->where('anio', $registration->anio)->first();
            if ($existingRegistrationAnio) {
                throw new \Exception("El alumno {$registration->student->names} {$registration->student->lastnames} no puede matricularse dos veces en el mismo año {$registration->anio}");
            }

            // $seccccion = $registration->section_id;
            // if (true) {
            //     throw new \Exception($seccccion);
            // }

            $registrationAprobado = self::where('student_id', $registration->student_id)->where('registration_status_id', '=', 6)->where('section_id', '=', $registration->section_id - 1)->where('anio', '<', $registration->anio)->exists();

            if (!$registrationAprobado) {
                $registrationReprobado = self::where('student_id', $registration->student_id)->where('registration_status_id', '=', 7)->where('section_id', '=', $registration->section_id - 1)->where('anio', '<', $registration->anio)->first();
                if ($registrationReprobado) {
                    throw new \Exception("El Alumno para Matricularse a otra seccion debe haber aprovado la seccion anterior");
                }
            }

            // where('anio', '<', $registration->anio)->

            // $ultimaMatricula = self::where('student_id', $registration->student_id)->orderBy('created_at', 'desc')->first();
            // throw new \Exception($ultimaMatricula->registration_status_id);
        });
    }

    public function getPublishedAtAttribute(){
        return $this->created_at->format('d/m/Y');
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function specialty(){
        return $this->belongsTo(Specialty::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function registrationstatus(){
        return $this->belongsTo(RegistrationStatu::class, 'registration_status_id');
    }
}

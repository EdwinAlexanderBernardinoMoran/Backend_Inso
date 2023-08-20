<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationStatu extends Model
{
    use HasFactory;

    public function getPublishedAtAttribute(){
        return $this->created_at->format('d/m/Y');
    }

    // Relacion de uno a muchos
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}

/*

    Preinscripción: Estado inicial de la matrícula cuando los alumnos se registran o son registrados previamente antes del proceso oficial de inscripción.

    Inscrito: Estado que indica que el alumno ha sido oficialmente inscrito en el sistema educativo y puede asistir a clases.

    Activo: Indica que el alumno está actualmente asistiendo a clases y sigue siendo parte del plantel educativo.

    Inactivo: Se aplica a los alumnos que temporalmente no están asistiendo a clases, pero se espera que vuelvan a estar activos en el futuro.

    Retirado: Estado para los alumnos que han dejado de asistir de forma permanente a la escuela.

    Transferido: Se aplica cuando un alumno ha sido transferido a otra escuela dentro del mismo sistema educativo o a una institución diferente.

    Graduado: Estado para los alumnos que han completado satisfactoriamente sus estudios y han recibido su certificación o diploma.

    Repitente: Estado para los alumnos que han repetido un grado o nivel académico.

    Ausente: Estado temporal que se aplica cuando un alumno ha faltado a clases por un período corto.

    Suspendido: Se aplica a los alumnos que han sido suspendidos temporalmente por motivos disciplinarios.

    Expulsado: Estado para los alumnos que han sido expulsados permanentemente de la institución.

    Promovido: Estado para los alumnos que han pasado satisfactoriamente al siguiente grado o nivel académico.

    En Proceso de Evaluación: Estado temporal para los alumnos cuyas calificaciones aún están siendo evaluadas o procesadas.

    En Receso: Estado para los alumnos que se encuentran en un período de receso o vacaciones escolares.

    En Espera: Se aplica cuando el alumno está en lista de espera para ser admitido en la institución debido a la disponibilidad de cupos.

    Matrícula Pendiente: Estado para los alumnos que han solicitado matrícula, pero aún no han sido oficialmente inscritos.

    Condicional: Estado para los alumnos que han sido admitidos con ciertas condiciones o requisitos adicionales a cumplir.

    Desertado: Se aplica a los alumnos que han abandonado sus estudios de forma voluntaria y no tienen intención de regresar.

    Reingreso: Estado para los alumnos que regresan a la institución después de haber estado inactivos o retirados.

    Baja Temporal: Estado para los alumnos que se encuentran temporalmente inactivos debido a razones médicas u otras circunstancias especiales.

    Graduado con Honor: Estado especial para los alumnos que han destacado académicamente y se han graduado con méritos adicionales.

    Registros de Estados de matriculas

    * Retirado
    * Activo
    * Transferido
    * Suspendido
    * Expulsado
    * Promovido
    * Reprovado
    * Desertado
    * Reingreso

*/

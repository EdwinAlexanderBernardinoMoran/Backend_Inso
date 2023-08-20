<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();

            // Llave Foranea a Alummnos (Matricula).
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');

            // Llave Foranea a Especialidad (Matricula).
            $table->unsignedBigInteger('specialty_id');
            $table->foreign('specialty_id')->references('id')->on('specialties');

            // Llave Foranea a Seccion (Matricula).
            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')->references('id')->on('sections');

            $table->integer('sections');
            $table->integer('anio');

            // Estados de la matricula
            $table->unsignedBigInteger('registration_statu_id');
            $table->foreign('registration_statu_id')->references('id')->on('registration_status');

            $table->tinyInteger('egresado'); // Egresado
            $table->tinyInteger('status'); // Habilitado

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
};

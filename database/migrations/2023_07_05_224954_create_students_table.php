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

        // ALUMNOS
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('names', 120);
            $table->string('lastnames', 120);
            $table->date('dateBirth');

            // LLave Foranea a nacionalidades
            $table->unsignedBigInteger('nationality_id');
            $table->foreign('nationality_id')->references('id')->on('nationalities');

            // LLave Foranea a Departamento De Nacimiento
            $table->unsignedBigInteger('departmentBirth_id');
            $table->foreign('departmentBirth_id')->references('id')->on('departments');

            // LLave Foranea a Municipio De Nacimiento
            $table->unsignedBigInteger('municipalityBirth_id');
            $table->foreign('municipalityBirth_id')->references('id')->on('municipalities');

            $table->string('yearStudy', 2); // Año de Bachillerato
            $table->string('nie', 100);
            $table->string('departureNumber', 10); // Numero de partida
            $table->string('departureFolio', 10); // Folio de partida
            $table->string('departureBook', 10); // Libro de partida
            $table->string('anotherIdentificationDocument', 50); // Otro D I
            $table->string('salvadoreno_por', 30);

            // LLave Foranea a Especialidades de Ingreso
            $table->unsignedBigInteger('incomeSpecialty_id');
            $table->foreign('incomeSpecialty_id')->references('id')->on('specialties');

            $table->char('parvularianStudy', 2); // Estudio Parvularia
            $table->char('repeatSection', 2); // Repite Grado

            // LLave Foranea a Centros Escolares
            $table->unsignedBigInteger('school_center_id');
            $table->foreign('school_center_id')->references('id')->on('school_centers');

            $table->integer('previousYear'); // año anterior
            $table->string('bloodType', 20); // Tipo de sangre
            $table->char('sexo', 1); // Sexo
            $table->char('stateFamiliar', 1); // Estado familiar
            $table->string('disability', 250); // Discapacidad
            $table->string('email', 250);
            $table->string('telephone', 9);

            // Llave Foranea a Zonas.
            $table->unsignedBigInteger('zone_id');
            $table->foreign('zone_id')->references('id')->on('zones');

            // Llave Foranea a Departamento de Residencia.
            $table->unsignedBigInteger('departmentResidence_id');
            $table->foreign('departmentResidence_id')->references('id')->on('departments');

            // Llave Foranea a Municipio de Residencia.
            $table->unsignedBigInteger('municipalityResidence_id');
            $table->foreign('municipalityResidence_id')->references('id')->on('municipalities');

            // Llave Foranea a Cantón de Residencia.
            $table->unsignedBigInteger('cantonResidence_id');
            $table->foreign('cantonResidence_id')->references('id')->on('cantons');

            // Llave Foranea a Caserío de Residencia.
            $table->unsignedBigInteger('hamletResidence_id');
            $table->foreign('hamletResidence_id')->references('id')->on('hamlets');

            $table->string('streetType', 50); // Tipo de Calle
            $table->string('fullAddress', 250); // Direccion Completa
            $table->string('middleTransport', 100); // Medio de Transporte
            $table->decimal('distanceFromHomeSchool', 5,2); // Distancia desde casa y centro educativo
            $table->string('riskFactor', 100); // Factor de Riesgo
            $table->integer('numberMembersFamily'); // Numero de Integrantes de la Familia.
            $table->tinyInteger('integrated'); // Integrados
            $table->string('dependsEconomically', 30); // Depende Economicamente
            $table->tinyInteger('hasChildren'); // Tiene hijos
            $table->string('numberChildren', 15);
            $table->tinyInteger('work'); // Work
            $table->string('coexistenceWith', 30); // Convivencia con
            $table->string('mothersName', 120); // Nombre Completo de la Madre
            $table->string('occupationMother', 100); // Ocupacion de la Madre
            $table->string('workplaceOfTheMother', 150); // Lugar de trabajo de la madre
            $table->string('mothersPhone', 9); // Telefono de la Madre
            $table->string('fathersName', 120); // Nombre Completo del Padre
            $table->string('occupationFather', 100); // Ocupacion del Padre
            $table->string('workplaceOfTheFather', 150); // Lugar de trabajo del padre
            $table->string('fathersPhone', 9); // Telefono del Padre
            $table->string('ResponsibleNames', 120); // Nombres del Responsable
            $table->string('ResponsibleLastNames', 120); // Apellidos del Responsable
            $table->string('DuiResponsible', 10); // Dui del Responsable
            $table->char('familyStateResponsible', 1); // Estado Familiar del Responsable
            $table->string('emailResponsible', 200); // Email Responsable
            $table->string('phoneResponsible', 9); // Telefono o celular Reponsable

            // Llave Foranea a Zona del Responsable.
            $table->unsignedBigInteger('zoneReponsible_id');
            $table->foreign('zoneReponsible_id')->references('id')->on('zones');

            // Llave Foranea a Departamento del Responsable.
            $table->unsignedBigInteger('departmentReponsible_id');
            $table->foreign('departmentReponsible_id')->references('id')->on('departments');

            // Llave Foranea a Municipio del Responsable.
            $table->unsignedBigInteger('municipalityReponsible_id');
            $table->foreign('municipalityReponsible_id')->references('id')->on('municipalities');

            // Llave Foranea a Cantón del Responsable.
            $table->unsignedBigInteger('cantonReponsible_id');
            $table->foreign('cantonReponsible_id')->references('id')->on('cantons');

            // Llave Foranea a Caserío del Responsable.
            $table->unsignedBigInteger('hamletReponsible_id');
            $table->foreign('hamletReponsible_id')->references('id')->on('hamlets');

            $table->string('streetTypeReponsible', 50); // Tipo de Calle del Responsable
            $table->string('fullAddressResponsible', 250); // Direccion Completa Del Reponsable
            $table->string('professionIfficeResponsible', 100); // Profesion ó Oficio Responsable
            $table->string('responsibleSchool', 200); // Escolaridad Reponsable
            $table->string('riskFactorResponsable', 100); // Factor de Riesgo Reponsable
            $table->date('dateReviewForm'); // Fecha Revision del Formulario
            $table->tinyInteger('birthCertificate'); // Partida de Nacimiento
            $table->tinyInteger('certificationNotes'); // Certificado de Notas
            $table->tinyInteger('certificate'); // Certificado
            $table->tinyInteger('photos'); // Fotos
            $table->tinyInteger('RecordNotes'); // Constancia de Notas
            $table->tinyInteger('residentCard'); // Constancia de Notas

            // Llave Foranea a Profesores.
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers');
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
        Schema::dropIfExists('students');
    }
};

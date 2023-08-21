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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('names', 120);
            $table->string('lastNames', 120);
            $table->string('address', 160);
            $table->string('dui', 10);
            $table->string('nip', 10);
            $table->string('nit', 15);
            $table->string('nup', 15);

            // Llave Foranea de Carreras de Profesores
            $table->unsignedBigInteger('career_id');
            $table->foreign('career_id')->references('id')->on('careers');

            // Llave Foranea de Categorias de Profesores
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            // Llave Foranea de Cargos de Profesores
            $table->unsignedBigInteger('position_id');
            $table->foreign('position_id')->references('id')->on('positions');

            $table->string('departure', 10); // Partida
            $table->string('subLevel', 10);
            $table->date('entryDate'); // Fecha de Ingreso
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
        Schema::dropIfExists('teachers');
    }
};

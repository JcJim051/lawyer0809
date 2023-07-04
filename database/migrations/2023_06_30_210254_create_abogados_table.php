<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbogadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abogados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('cc')->nullable();
            $table->string('correo')->nullable();
            $table->string('direccion')->nullable();
            $table->string('comuna')->nullable();
            $table->string('puesto')->nullable();
            $table->string('mesa')->nullable();
            $table->string('estudios')->nullable();
            $table->string('titulo')->nullable();
            $table->string('experiencia')->nullable();
            $table->string('electoral')->nullable();
            $table->string('rol')->nullable();
            $table->string('face')->nullable();
            $table->string('insta')->nullable();
            $table->string('pdf_cc')->nullable();
            $table->string('foto')->nullable();

            




        

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
        Schema::dropIfExists('abogados');
    }
}

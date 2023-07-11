<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLugarToAbogadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abogados', function (Blueprint $table) {
            $table->string('lugar')->nullable();
            $table->string('alcaldia')->nullable();
            $table->string('rol_actual')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abogados', function (Blueprint $table) {
            //
        });
    }
}

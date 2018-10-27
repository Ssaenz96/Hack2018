<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {

            $table->increments('id');
            $table->float('latitud');
            $table->float('longitud');
            $table->date('fecha');
            $table->string('comentario')
                  ->nullable();
            $table->unsignedInteger('tipo_id');
            $table->unsignedInteger('user_id');

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->foreign('tipo_id')
                  ->references('id')
                  ->on('tipos');

            $table->rememberToken();
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
        Schema::dropIfExists('incidencias');
    }
}

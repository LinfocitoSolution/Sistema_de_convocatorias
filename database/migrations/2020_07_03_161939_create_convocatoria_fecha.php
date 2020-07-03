<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvocatoriaFecha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatoria_fecha',function(Blueprint $table)
        {
            $table->increments('id');
            $table->Integer('convocatoria_id')->unsigned();
            $table->Integer('fecha_id')->unsigned();
            $table->timestamps();

            $table->foreign('convocatoria_id')->references('id')->on('convocatorias')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

                  $table->foreign('fecha_id')->references('id')->on('fechas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

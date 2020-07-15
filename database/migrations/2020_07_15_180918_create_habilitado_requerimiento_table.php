<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabilitadoRequerimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilitado_requerimiento',function(Blueprint $table)
        {
            $table->increments('id');
            $table->Integer('requerimiento_id')->unsigned();
            $table->Integer('habilitado_id')->unsigned();            
            $table->timestamps();

            $table->foreign('requerimiento_id')->references('id')->on('requerimientos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

                  $table->foreign('habilitado_id')->references('id')->on('habilitados')
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
        Schema::dropIfExists('habilitado_requerimiento');
    }
}

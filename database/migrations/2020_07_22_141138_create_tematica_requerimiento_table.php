<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTematicaRequerimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tematica_requerimiento',function(Blueprint $table)
        {
            $table->increments('id');
            $table->Integer('tematica_id')->unsigned();
            $table->Integer('requerimiento_id')->unsigned();
            $table->double('score');            
            $table->timestamps();

            $table->foreign('requerimiento_id')->references('id')->on('requerimientos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

                  $table->foreign('tematica_id')->references('id')->on('tematicas')
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
        Schema::dropIfExists('tematica_requerimiento');
    }
}

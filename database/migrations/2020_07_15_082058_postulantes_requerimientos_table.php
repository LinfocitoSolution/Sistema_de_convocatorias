<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostulantesRequerimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_requerimientos',function(Blueprint $table)
        {
            $table->increments('id');
            $table->Integer('user_id')->unsigned();
            $table->Integer('requerimiento_id')->unsigned();            
            $table->timestamps();

            $table->foreign('requerimiento_id')->references('id')->on('requerimientos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

                  $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('users_requerimientos');
    }
}

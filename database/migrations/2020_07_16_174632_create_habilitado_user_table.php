<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabilitadoUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilitado_user',function(Blueprint $table)
        {
            $table->increments('id');
            $table->Integer('habilitado_id')->unsigned();
            $table->Integer('user_id')->unsigned();            
            $table->timestamps();

            $table->foreign('habilitado_id')->references('id')->on('habilitados')
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
        Schema::dropIfExists('habilitado_user');
    }
}

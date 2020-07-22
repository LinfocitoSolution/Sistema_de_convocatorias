<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){    
        Schema::create('meritos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('convocatoria_id');
            $table->string('description');
            $table->double('score');            
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('convocatoria_id')->references('id')->on('convocatorias')
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
        Schema::dropIfExists('meritos');
    }
}

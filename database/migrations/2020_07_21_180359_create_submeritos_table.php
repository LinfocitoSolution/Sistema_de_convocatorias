<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmeritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){    
        Schema::create('submeritos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('merito_id');
            $table->string('description')->nullable();
            $table->double('score');
            $table->foreign('merito_id')->references('id')->on('meritos')
            ->onDelete('cascade')
            ->onUpdate('cascade');           
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
        Schema::dropIfExists('submeritos');
    }
}

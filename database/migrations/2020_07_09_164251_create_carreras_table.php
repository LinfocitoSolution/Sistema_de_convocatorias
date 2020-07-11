
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration
{
    public function up(){    
        Schema::create('carreras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->rememberToken();
            $table->timestamps();
            
        });
    }       
    public function down()
    {
        Schema::dropIfExists('carreras');
    }
}

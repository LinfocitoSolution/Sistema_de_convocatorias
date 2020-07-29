<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdAtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('descripcions', function (Blueprint $table) {
            $table->unsignedInteger('submerito_id')->after('id');//->nullable() ;          
            $table->foreign('submerito_id')->references('id')->on('submeritos')
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
        Schema::table('descripcions', function (Blueprint $table) {
            //
        });
    }
}

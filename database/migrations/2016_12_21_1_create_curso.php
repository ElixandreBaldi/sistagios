<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nome');
            $table->char('turno',1);
            $table->integer('idProfessor')->unsigned();
            $table->foreign('idProfessor')->references('id')->on('professor');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('curso');
    }
}
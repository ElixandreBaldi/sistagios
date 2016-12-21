<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('vaga', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('setor');
            $table->decimal('bolsa',5,2);
            $table->boolean('aberta');
            $table->integer('idCurso')->unsigned();
            $table->foreign('idCurso')->references('id')->on('curso');                
            $table->integer('idEmpresa')->unsigned();
            $table->foreign('idEmpresa')->references('id')->on('empresa');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vaga');
    }
}

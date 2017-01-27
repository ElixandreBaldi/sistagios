<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstagio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('estagios', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('supervisor');
            $table->integer('idVaga')->unsigned();
            $table->foreign('idVaga')->references('id')->on('vaga');
            $table->integer('idAluno')->unsigned();
            $table->foreign('idAluno')->references('id')->on('aluno');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estagios');
    }
}

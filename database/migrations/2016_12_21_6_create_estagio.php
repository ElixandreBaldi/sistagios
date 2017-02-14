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
            $table->string('descricao');
            $table->string('setor');
            $table->decimal('bolsa',5,2);
            $table->boolean('aberta');
            $table->string('supervisor')->nullable();
            $table->integer('idCurso')->unsigned();
            $table->foreign('idCurso')->references('id')->on('cursos');
            $table->integer('idEmpresa')->unsigned();
            $table->foreign('idEmpresa')->references('id')->on('empresas');
            $table->integer('idAluno')->unsigned()->nullable();
            $table->foreign('idAluno')->references('id')->on('alunos');
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
        Schema::drop('estagios');
    }
}

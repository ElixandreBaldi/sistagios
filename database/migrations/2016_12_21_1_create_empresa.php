<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cnpj');
            $table->string('representante');
            $table->string('telefone1');
            $table->string('telefone2');
            $table->string('email')->unique();                        
            $table->integer('idEndereco')->unsigned();
            $table->foreign('idEndereco')->references('id')->on('endereco');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empresa');
    }
}

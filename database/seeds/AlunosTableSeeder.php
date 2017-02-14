<?php

use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
            'nome' => 'Gabriel Medina Marques',
            'rg' => '128798569',
            'cpf' => '48985987490',
            'telefone' => '45988881111',
            'email' => 'g_markinho@gmail.com',
            'idCurso' => 1,
            'idEndereco' => 3
        ]);
        DB::table('alunos')->insert([
            'nome' => 'João Victor Canabarro',
            'rg' => '125898749',
            'cpf' => '84598287496',
            'telefone' => '45958962589',
            'email' => 'jcanabarro@tecinco.com.br',
            'idCurso' => 2,
            'idEndereco' => 4
        ]);
    }
}

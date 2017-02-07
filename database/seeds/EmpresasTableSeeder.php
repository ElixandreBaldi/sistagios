<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'nome' => 'Coopavel',
            'cnpj' => '59.701.235/0001-53',
            'representante' => 'Joselito',
            'telefone1' => '(45) 3654-4102',
            'telefone2' => '(22) 98387-6403',
            'email' => 'rh@coopavel.br',
            'idEndereco' => 1
        ]);
        DB::table('empresas')->insert([
            'nome' => 'Prefeitura Municipal',
            'cnpj' => '74.668.955/0001-58',
            'representante' => 'Paranhos',
            'telefone1' => '(45) 2753-6731',
            'telefone2' => '(45) 98295-4681',
            'email' => 'rh@cascavel.pr.gov.br',
            'idEndereco' => 2
        ]);
    }
}

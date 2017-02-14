<?php

use Illuminate\Database\Seeder;

class EstagiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estagios')->insert([
            'descricao' => 'Auxiliar de Moto-serra',
            'setor' => 'Florestal',
            'bolsa' => '0.00',
            'aberta' => 1,
            'supervisor' => 'Edilson Melancia',
            'idCurso' => 3,
            'idEmpresa' => 1,
        ]);
        DB::table('estagios')->insert([
            'descricao' => 'Rapaz da Informática',
            'setor' => 'Laboratórios',
            'bolsa' => '300.00',
            'aberta' => 1,
            'supervisor' => 'Gorete',
            'idCurso' => 1,
            'idEmpresa' => 2,
        ]);
        DB::table('estagios')->insert([
            'descricao' => 'Administrador Financeiro Premium',
            'setor' => 'Análise',
            'bolsa' => '200.00',
            'aberta' => 1,
            'supervisor' => 'Héricles',
            'idCurso' => 2,
            'idEmpresa' => 2,
        ]);
        DB::table('estagios')->insert([
            'descricao' => 'Administrador Financeiro Mediano',
            'setor' => 'Análise',
            'bolsa' => '100.00',
            'aberta' => 0,
            'supervisor' => 'Héricles',
            'idCurso' => 2,
            'idEmpresa' => 2,
            'idAluno' => 2
        ]);
        DB::table('estagios')->insert([
            'descricao' => 'Semi-desenvolvedor',
            'setor' => 'Desenvolvimento',
            'bolsa' => '150.00',
            'aberta' => 0,
            'supervisor' => 'Santello',
            'idCurso' => 1,
            'idEmpresa' => 1,
            'idAluno' => 1
        ]);
    }
}

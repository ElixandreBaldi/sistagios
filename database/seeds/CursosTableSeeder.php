<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'nome' => 'Informática',
            'turno' => '1',
            'idProfessor' => 1
        ]);
        DB::table('cursos')->insert([
            'nome' => 'Administração',
            'turno' => '2',
            'idProfessor' => 2
        ]);
        DB::table('cursos')->insert([
            'nome' => 'Meio Ambiente',
            'turno' => '1',
            'idProfessor' => 3
        ]);
    }
}

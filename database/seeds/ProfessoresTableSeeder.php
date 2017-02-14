<?php

use Illuminate\Database\Seeder;

class ProfessoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professores')->insert([
            'nome' => 'Andre Jandrey',
            'email' => 'jandrey@yahoo.com'
        ]);
        DB::table('professores')->insert([
            'nome' => 'Leonice Schneider',
            'email' => 'leonice@ceep.com.br'
        ]);
        DB::table('professores')->insert([
            'nome' => 'Luciana Link',
            'email' => 'luciana@dlink.com.br'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class EnderecosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enderecos')->insert([
            'id' => 1,
            'CEP' => '28605-535',
            'rua' => 'Av. Rio Azul',
            'numero' => 787,
            'bairro' => 'Lago Azul',
            'cidade' => 'Cascavel',
            'uf' => 'PR'
        ]);
        DB::table('enderecos')->insert([
            'id' => 2,
            'CEP' => '61658-020',
            'rua' => 'Av. Contorno Sul',
            'numero' => 379,
            'bairro' => 'Centro',
            'cidade' => 'Cascavel',
            'uf' => 'PR'
        ]);
        DB::table('enderecos')->insert([
            'id' => 3,
            'CEP' => '85805-480',
            'rua' => 'Rua Vasco da Gama',
            'numero' => 665,
            'bairro' => 'Pioneiros Catarinenses',
            'cidade' => 'Cascavel',
            'uf' => 'PR'
        ]);
        DB::table('enderecos')->insert([
            'id' => 4,
            'CEP' => '85815-110',
            'rua' => 'Rua Ernesto Nazareth',
            'numero' => 135,
            'bairro' => 'Brasília',
            'cidade' => 'Cascavel',
            'uf' => 'PR'
        ]);
    }
}

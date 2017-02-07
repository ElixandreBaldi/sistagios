<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Luiz Guilherme',
            'username' => 'luiz',
            'password' => bcrypt('sistagiosunioeste'),
        ]);
        DB::table('users')->insert([
            'name' => 'Elixandre Balde',
            'username' => 'elixandre',
            'password' => bcrypt('sistagiosunioeste'),
        ]);
    }
}

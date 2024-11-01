<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'Gustavo Ferreira',
            'email' => 'gustavo@admin.com.br',
            'password' => Hash::make('123456789'),
            'perfil' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Jorlana Pontes',
            'email' => 'jorlana@admin.com.br',
            'password' => Hash::make('123456789'),
            'perfil'=> 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Patrick Fernandes',
            'email' => 'patrick@padrao.com.br',
            'password' => Hash::make('123456789'),
            'perfil' => 'padrao',
        ]);
        DB::table('users')->insert([
            'name' => 'Andre Neves',
            'email' => 'andre@admin.com.br',
            'password' => Hash::make('123456789'),
            'perfil'=> 'admin',
        ]);


    }
}

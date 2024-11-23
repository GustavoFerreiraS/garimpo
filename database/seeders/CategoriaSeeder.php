<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome' => 'Celular',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Roupa',
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Televisão',
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Móveis',
        ]);
    }
}

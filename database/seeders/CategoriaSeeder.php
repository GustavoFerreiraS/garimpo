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
        DB::table('categorias')->insert([
            'nome' => 'Câmera',
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Tênis',
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Eletrodomésticos',
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Notebooks', //8
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Tablets', //9
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Videogames ', //10
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Bicicletas', //11
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Relógios', //12
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Decoração', //13
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Quadros', //15
        ]);
        DB::table('categorias')->insert([
            'nome' => 'itens de  Beleza', //16
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Esportivos', //17
        ]);


    }
}

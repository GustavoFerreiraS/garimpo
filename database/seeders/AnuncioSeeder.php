<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnuncioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('anuncios')->insert([
            'user_id' => 1,
            'titulo' => 'meu primeiro anuncio',
            'conteudo' => 'Conteúdo da primeira anuncio',
        ]);

        DB::table('anuncios')->insert([
            'user_id' => 2,
            'titulo' => 'meu segunda anuncio',
            'conteudo' => 'Conteúdo da primeira anuncio',
        ]);

        DB::table('anuncios')->insert([
            'user_id' => 3,
            'titulo' => 'meu terceira anuncio',
            'conteudo' => 'Conteúdo da primeira anuncio',
        ]);



    }
}

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
            'categoria_id' =>1,
            'user_id' => 1,
            'titulo' => 'meu primeiro anuncio',
            'conteudo' => 'Conteúdo da primeira anuncio',
        ]);

        DB::table('anuncios')->insert([
            'categoria_id' =>2,
            'user_id' => 2,
            'titulo' => 'meu segunda anuncio',
            'conteudo' => 'Conteúdo da primeira anuncio',
        ]);

        DB::table('anuncios')->insert([
            'categoria_id' =>3,
            'user_id' => 3,
            'titulo' => 'meu terceira anuncio',
            'conteudo' => 'Conteúdo da primeira anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>4,
            'user_id' => 4,
            'titulo' => 'meu quarto anuncio',
            'conteudo' => 'Conteúdo da quarto anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>5,
            'user_id' => 2,
            'titulo' => 'meu anuncio',
            'conteudo' => 'Conteúdo dooooo anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>6,
            'user_id' => 2,
            'titulo' => 'meu anuncio',
            'conteudo' => 'Conteúdo dooooo anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>7,
            'user_id' => 3,
            'titulo' => 'meu anuncio',
            'conteudo' => 'Conteúdo dooooo anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>8,
            'user_id' => 2,
            'titulo' => 'meu anuncio',
            'conteudo' => 'Conteúdo dooooo anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>9,
            'user_id' => 1,
            'titulo' => 'meu anuncio',
            'conteudo' => 'Conteúdo dooooo anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>10,
            'user_id' => 4,
            'titulo' => 'meu anuncio',
            'conteudo' => 'Conteúdo dooooo anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>11,
            'user_id' => 3,
            'titulo' => 'meu anuncio',
            'conteudo' => 'Conteúdo dooooo anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>12,
            'user_id' => 2,
            'titulo' => 'meu anuncio',
            'conteudo' => 'Conteúdo dooooo anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>13,
            'user_id' => 1,
            'titulo' => 'meu anuncio',
            'conteudo' => 'Conteúdo dooooo anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>14,
            'user_id' => 4,
            'titulo' => 'meu anuncio',
            'conteudo' => 'Conteúdo dooooo anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>15,
            'user_id' => 3,
            'titulo' => 'meu anuncio',
            'conteudo' => 'Conteúdo dooooo anuncio',
        ]);
        DB::table('anuncios')->insert([
            'categoria_id' =>16,
            'user_id' => 2,
            'titulo' => 'meu anuncio',
            'conteudo' => 'Conteúdo dooooo anuncio',
        ]);







    }
}

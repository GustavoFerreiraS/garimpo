<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comentarios')->insert([
            'anuncio_id' => '2',
            'user_id' => '2',
            'conteudo' => 'achei muito legal',
        ]);

        DB::table('comentarios')->insert([
            'anuncio_id' => '2',
            'user_id' => '2',
            'conteudo' => 'Gostei',
        ]);


    }
}

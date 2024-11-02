<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DenunciarAnuncioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('denuncia_anuncios')->insert([
            'anuncio_id' => 1,
            'user_id' => 1,
            'conteudo' => 'conteúdo da denúncia 1',
        ]);

        DB::table('denuncia_anuncios')->insert([
            'anuncio_id' => 2,
            'user_id' => 1,
            'conteudo' => 'conteúdo da denúncia 2',
        ]);
    }
}

<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoriaSeeder::class,
            UserSeeder::class,
            AnuncioSeeder::class,
            ComentarioSeeder::class,
            CurtidaSeeder::class,
            DenunciarAnuncioSeeder::class,

        ]);


    }




}



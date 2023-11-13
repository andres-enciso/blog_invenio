<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('entradas')->insert([
            [
                'titulo' => 'Noticia 1',
                'autor' => 'andres',
                'fecha_publicacion' => '2023-11-13',
                'contenido' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas...',
                'tipo' => '["social"]',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Noticia test 2',
                'autor' => 'enciso',
                'fecha_publicacion' => '2023-11-13',
                'contenido' => 'No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno...',
                'tipo' => '["news","social","music","ASDF"]',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criação de eventos
        DB::table('events')->insert([
            'tipo' => 'Social',
            'titulo' => 'Festa de aniversário',
            'descricao' => 'Festa de aniversário de 18 anos',
            'data' => '2025-03-01',
            'valor' => 100.00,
            'google_maps_link' => 'https://goo.gl/maps/1',
        ]);
    }
}

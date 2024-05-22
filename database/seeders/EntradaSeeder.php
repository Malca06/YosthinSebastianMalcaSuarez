<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('entradas')->insert([
            'placa' => 'ABC123',
            'fecha' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

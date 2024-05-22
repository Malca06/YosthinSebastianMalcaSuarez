<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehiculos')->insert([
            'placa' => 'ABC123',
            'modelo' => 'Toyota Corolla',
            'propietario' => 'John Doe',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Ejemplo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EjemploSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Ejemplo::factory()->count(10)->create();
    }
}

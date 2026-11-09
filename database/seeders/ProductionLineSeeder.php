<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductionLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductionLine::insert([
        [
            'name' => 'Corte y preparación',
            'location' => 'Nave A',
            'status' => 'activa',
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
        [
            'name' => 'Soldadura',
            'location' => 'Nave B',
            'status' => 'activa',
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
        [
            'name' => 'Ensamblaje',
            'location' => 'Nave C',
            'status' => 'activa',
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
        [
            'name' => 'Pintura',
            'location' => 'Nave D',
            'status' => 'inactiva',
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
    ]);

    }
}

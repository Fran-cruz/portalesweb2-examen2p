<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaintenanceOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaintenanceOrder::insert([
        [
            'machine\_id' => 1,
            'order\_number' => 'ORD-001',
            'maintenance\_type' => 'preventivo',
            'status' => 'finalizado',
            'technician' => 'Carlos Martínez',
            'estimated\_cost' => 1500,
            'actual\_cost' => 1450,
            'scheduled\_at' => '2026-01-10',
            'completed\_at' => '2026-01-11',
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
        [
            'machine\_id' => 2,
            'order\_number' => 'ORD-002',
            'maintenance\_type' => 'correctivo',
            'status' => 'pendiente',
            'technician' => 'José Hernández',
            'estimated\_cost' => 2500,
            'actual\_cost' => null,
            'scheduled\_at' => '2026-02-15',
            'completed\_at' => null,
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
        [
            'machine\_id' => 3,
            'order\_number' => 'ORD-003',
            'maintenance\_type' => 'preventivo',
            'status' => 'en\_proceso',
            'technician' => 'María López',
            'estimated\_cost' => 1800,
            'actual\_cost' => null,
            'scheduled\_at' => '2026-03-20',
            'completed\_at' => null,
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
        [
            'machine\_id' => 4,
            'order\_number' => 'ORD-004',
            'maintenance\_type' => 'correctivo',
            'status' => 'finalizado',
            'technician' => 'Pedro Gómez',
            'estimated\_cost' => 3200,
            'actual\_cost' => 3100,
            'scheduled\_at' => '2026-04-05',
            'completed\_at' => '2026-04-06',
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
    ]);

    }
}

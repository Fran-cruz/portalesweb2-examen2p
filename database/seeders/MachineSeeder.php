<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Machine::insert([
        [
            'production\_line\_id' => 1,
            'code' => 'MAQ-001',
            'name' => 'Cortadora industrial',
            'type' => 'Corte',
            'status' => 'operativa',
            'criticality' => 'alta',
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
        [
            'production\_line\_id' => 1,
            'code' => 'MAQ-002',
            'name' => 'Prensa hidráulica',
            'type' => 'Prensado',
            'status' => 'mantenimiento',
            'criticality' => 'alta',
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
        [
            'production\_line\_id' => 2,
            'code' => 'MAQ-003',
            'name' => 'Soldadora automática',
            'type' => 'Soldadura',
            'status' => 'operativa',
            'criticality' => 'media',
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
        [
            'production\_line\_id' => 2,
            'code' => 'MAQ-004',
            'name' => 'Compresor industrial',
            'type' => 'Compresión',
            'status' => 'operativa',
            'criticality' => 'alta',
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
        [
            'production\_line\_id' => 3,
            'code' => 'MAQ-005',
            'name' => 'Equipo de ensamblaje',
            'type' => 'Ensamblaje',
            'status' => 'operativa',
            'criticality' => 'media',
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
        [
            'production\_line\_id' => 4,
            'code' => 'MAQ-006',
            'name' => 'Cabina de pintura',
            'type' => 'Pintura',
            'status' => 'fuera\_servicio',
            'criticality' => 'alta',
            'created\_at' => now(),
            'updated\_at' => now(),
        ],
    ]);

    }
}

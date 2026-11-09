<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{

    // Consulta 3. MAQUINAS CON INFORMACION DE SU LINEA DE PRODUCCION
    public function machinesWithProductionLine()
    {
        $machines = Machine::with('productionLine:id,name,location')
            ->select('id', 'code', 'name', 'type', 'status', 'criticality', 'production_line_id')
            ->orderBy('name')
            ->get();

        return response()->json($machines);
    }
}

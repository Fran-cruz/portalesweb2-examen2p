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
    // Consulta 4. CANTIDAD DE ORDENES DE MANTENIMIENTO POR MAQUINA
    public function machinesWithMaintenanceCount()
    {
        $machines = Machine::select('code', 'name', 'status', 'criticality')
            ->withCount('maintenanceOrders')
            ->orderBy('maintenance_orders_count', 'desc')
            ->get();

        return response()->json($machines);
    }
}

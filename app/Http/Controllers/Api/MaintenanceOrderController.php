<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MaintenanceOrder;
use Illuminate\Http\Request;
use App\Models\Machine;

class MaintenanceOrderController extends Controller
{
    //Josue
    public function scheduled($date1, $date2)
    {
        $machines = MaintenanceOrder::whereBetween('scheduled_at', [$date1, $date2])
            ->orderBy('scheduled_at', 'asc')
            ->select('id','order_number','maintenance_type','status',
                'technician','estimated_cost','scheduled_at')
            ->get();
        return response()->json($machines);
    }

    //Josue
    public function MaintenanceCompleted($date)
    {
        $machines = MaintenanceOrder::whereDate('completed_at', $date)
            ->orderBy('scheduled_at', 'asc')
            ->select('id','order_number','machine_id','maintenance_type','status','technician','actual_cost','completed_at')
            ->get();
        return response()->json($machines);
    }

     public function machinesWithPendingCorrectiveMaintenance() //Nain ejercicio 6
    {
        $machines = Machine::with('productionLine:id,name')
            ->whereHas('maintenanceOrders', function ($query) {
                $query->where('maintenance_type', 'correctivo')
                      ->where('status', 'pendiente')
                      ->whereNull('completed_at');
            })
            ->get(['id', 'production_line_id', 'code', 'name', 'status', 'criticality']);

        return response()->json($machines);
    }


}

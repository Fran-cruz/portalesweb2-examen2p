<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MaintenanceOrder;
use Illuminate\Http\Request;
use App\Models\Machine;

class MaintenanceOrderController extends Controller
{

    public function scheduled($date1, $date2)
    {
        $machines = MaintenanceOrder::whereBetween('scheduled_at', [$date1, $date2])
            ->orderBy('scheduled_at', 'asc')
            ->select('id','order_number','maintenance_type','status',
                'technician','estimated_cost','scheduled_at')
            ->get();
        return response()->json($machines);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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

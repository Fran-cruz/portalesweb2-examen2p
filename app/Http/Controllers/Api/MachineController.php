<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Machine;

class MachineController extends Controller
{
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

    //Consulta 5 - Laura Berganza
    public function getMachineByStatusAndCriticalityHigh($status)
    {
        $machines = Machine::where('status', $status)->where('criticality', 'alta')->select('code','name','type','status', 'criticality')->get();

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

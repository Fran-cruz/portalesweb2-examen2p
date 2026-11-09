<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MaintenanceOrderController;
use App\Http\Controllers\Api\MachineController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Consulta 1
Route::get('horario-mantenimiento/{date1}/{date2}', [MaintenanceOrderController::class, 'scheduled']);

// Consulta 3
Route::get('/machines/production-lines', [
    MachineController::class,
    'machinesWithProductionLine'
]);

//Consulta 5 - Laura Berganza
Route::get('/machines/status/{status}', [MachineController::class, 'getMachineByStatusAndCriticalityHigh']);

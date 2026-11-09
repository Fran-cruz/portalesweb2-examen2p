<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MaintenanceOrderController;
<<<<<<< HEAD
=======
use App\Http\Controllers\Api\MachineController;

>>>>>>> 298efd8498956336c2242fb5f8e69153e5a0f5ea

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

<<<<<<< HEAD

Route::get('/machines/pending-corrective', [MaintenanceOrderController::class,'machinesWithPendingCorrectiveMaintenance'
]);
=======
// Consulta 1
Route::get('horario-mantenimiento/{date1}/{date2}', [MaintenanceOrderController::class, 'scheduled']);

// Consulta 3
Route::get('/machines/production-lines', [
    MachineController::class,
    'machinesWithProductionLine'
]);

// Consulta 4
Route::get('/machines/maintenance-count', [
    MachineController::class,
    'machinesWithMaintenanceCount'
]);
>>>>>>> 298efd8498956336c2242fb5f8e69153e5a0f5ea

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MachineController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Consulta 3
Route::get('/machines/production-lines', [
    MachineController::class,
    'machinesWithProductionLine'
]);

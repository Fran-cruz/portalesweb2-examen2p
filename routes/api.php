<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MaintenanceOrderController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('horario-mantenimiento/{date1}/{date2}', [MaintenanceOrderController::class, 'scheduled']);

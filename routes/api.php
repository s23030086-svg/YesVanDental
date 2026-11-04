<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PacienteController;
use App\Http\Controllers\Api\OdontologoController;
use App\Http\Controllers\Api\TratamientoController;
use App\Http\Controllers\Api\CitaController;
use App\Http\Controllers\Api\PagoController;
use App\Http\Controllers\Api\RecetaController;
use App\Http\Controllers\Api\ExpedienteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('pacientes', PacienteController::class);
Route::apiResource('odontologos', OdontologoController::class);
Route::apiResource('tratamientos', TratamientoController::class);
Route::apiResource('citas', CitaController::class);
Route::apiResource('pagos', PagoController::class);
Route::apiResource('recetas', RecetaController::class);
Route::apiResource('expedientes', ExpedienteController::class);


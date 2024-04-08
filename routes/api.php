<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Ruta para registrar un nuevo usuario
Route::post('/register', [AuthController::class, 'register']);

// Ruta para iniciar sesión
Route::post('/login', [AuthController::class, 'login']);

// Grupo de rutas con middleware
Route::middleware('auth:sanctum')->group(function () {

    // Ruta para cerrar sesión
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('/tests', \App\Http\Controllers\TestController::class);
});

?>
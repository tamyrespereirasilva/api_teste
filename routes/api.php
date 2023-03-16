<?php

use App\Http\Controllers\ClienteController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/clientes', [ClienteController::class, 'index']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::get('/clientes/{id}', [ClienteController::class, 'show']);


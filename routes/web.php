<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonaController;

Route::get('/persona/create', [PersonaController::class, 'create']);
Route::post('/persona/store', [PersonaController::class, 'store']);


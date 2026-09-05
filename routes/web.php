<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

/*
|--------------------------------------------------------------------------
| Web Routes - Invitación Digital "Descubre el Nuevo Mundo SUV"
|--------------------------------------------------------------------------
*/

// Ruta principal de la invitación (Cajamarca 2026)
Route::get('/', [EventoController::class, 'index'])->name('evento.index');

// Ruta amigable alternativa
Route::get('/lanzamiento-suv', [EventoController::class, 'index'])->name('evento.suv');

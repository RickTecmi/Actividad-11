<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta para la página de Inicio (/)
Route::get('/', [PageController::class, 'inicio'])->name('inicio');

// Ruta para la página de Fotos (/fotos)
Route::get('/fotos', [PageController::class, 'fotos'])->name('fotos');

// Ruta para la página de Contacto (/contacto)
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');

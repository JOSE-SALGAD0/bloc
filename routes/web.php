<?php

use App\Http\Controllers\inicioController;
use App\Http\Controllers\unidad1Controller;
use App\Http\Controllers\unidad2Controller;
use App\Http\Controllers\publicacionController;

use App\Http\Controllers\genericController;
use App\Http\Controllers\elementsController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', inicioController::class);

Route::get('inicio', inicioController::class)->name('ver.inicio');

Route::get('unidad-1', unidad1Controller::class)->name('ver.unidad1');

Route::get('unidad-2', unidad2Controller::class)->name('ver.unidad2');

Route::get('publicacion/{resultado_de_aprendizaje}', [publicacionController::class, 'mostrarPublicacion'])->name('ver.publicacion');

Route::get('publicaciones', publicacionController::class)->name('ver.publicaciones');

Route::get('generic', genericController::class);

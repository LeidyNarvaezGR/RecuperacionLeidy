<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultasController;
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

Route::get('/consulta1', [ConsultasController::class, 'consulta1']);
Route::get('/consulta2', [ConsultasController::class, 'consulta2']);
Route::get('/consulta3', [ConsultasController::class, 'consulta3']);
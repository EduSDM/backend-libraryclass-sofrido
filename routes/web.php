<?php

use App\Http\Controllers\MuraisController;
use App\Http\Controllers\PublicacoesController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/usuarios', UsuariosController::class);
Route::resource('/publicacoes', PublicacoesController::class);
Route::resource('/murais', MuraisController::class);
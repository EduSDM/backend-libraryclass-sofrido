<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\AvaliacoesPeriodicasController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\DevolucoesController;
use App\Http\Controllers\EmprestimosController;
use App\Http\Controllers\FichadosLivrosController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\MultasController;
use App\Http\Controllers\MuraisController;
use App\Http\Controllers\PublicacoesController;
use App\Http\Controllers\ResenhasController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\SecoesController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

      

Route::resource('/users', UsuariosController::class);
Route::get('/login', [UsuariosController::class, "telaLogin"])->name("login");
Route::get("/checando",[UsuariosController::class,"checking"]);
Route::post('/login', [UsuariosController::class, "login"]);
Route::get('/logout', [UsuariosController::class, "logout"])->name("logout");

Route::resource('/multas', MultasController::class);
Route::resource('/devolucaos', DevolucoesController::class);

Route::resource('/avaliacaoPeriodicas', AvaliacoesPeriodicasController::class);

Route::resource('/murais', MuraisController::class);

Route::resource('/publicacoes', PublicacoesController::class);

Route::resource('/autor', AutorController::class);

Route::resource('/resenhas', ResenhasController::class);

Route::resource('/reservas', ReservasController::class);

Route::resource('/livros', LivrosController::class);

Route::resource('/emprestimos', EmprestimosController::class);

Route::resource('/devolucaos', DevolucoesController::class);

Route::resource('/fichadoLivro', FichadosLivrosController::class);

Route::resource('/secoes', SecoesController::class );
Route::resource('/categorias', CategoriasController::class);

Route::get('/obterReserva',[ReservasController::class,'obterDadosReserva']);
Route::get('/obterReservaAtivas',[ReservasController::class,'obterDadosReservaAtivas']);


Route::get('/maisemprestados',[LivrosController::class,'maisemprestados']);


Route::get('/ultimasPublicacoes',[PublicacoesController::class,'ultimasPublicacoes']);

Route::get('/resenhasLivro/{livro}',[ResenhasController::class,'resenhasLivro']);
Route::get('/minhasReservas/{usuario}',[ReservasController::class,'minhasReservas']);




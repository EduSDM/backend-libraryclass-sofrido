<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\AvaliacoesPeriodicasController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\DevolucoesController;
use App\Http\Controllers\EmprestimosController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\MuraisController;
use App\Http\Controllers\PublicacoesController;
use App\Http\Controllers\ResenhasController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\SecoesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Route;

      

Route::resource('/users', UsuariosController::class);
Route::get('/login', [UsuariosController::class, "telaLogin"])->name("login");
Route::post('/login', [UsuariosController::class, "login"]);

Route::middleware(['autenticador'])->group(function () {
    //usuario comum
    Route::get('/logout', [UsuariosController::class, "logout"])->name("logout");

    Route::get('/publicacoes', [PublicacoesController::class, 'index']);
    Route::get('/murais', [MuraisController::class, 'index']);
    Route::get('/autor', [AutorController::class, 'index']);
    Route::resource('/resenhas', ResenhasController::class);
    Route::get('/reservas', [ReservasController::class, 'index']);
    //Route::resource('/multas', MultasController::class); 
    Route::get('/livros', [LivrosController::class, 'index']);
    Route::get('/emprestimos', [EmprestimosController::class, 'index']);
    Route::get('/devolucaos', [DevolucoesController::class, 'index']);
    // Route::resource('/avaliacaoPeriodicas', AvaliacoesPeriodicasController::class);
  

    //diretor 
    Route::middleware(['diretor'])->group(function () {
        Route::resource('/publicacoes', PublicacoesController::class);
        Route::resource('/murais', MuraisController::class);
        Route::resource('/autor', AutorController::class);
        Route::resource('/resenhas', ResenhasController::class);
        Route::resource('/reservas', ReservasController::class);
        //Route::resource('/multas', MultasController::class);
        Route::resource('/livros', LivrosController::class);
        Route::resource('/emprestimos', EmprestimosController::class);
        Route::resource('/devolucaos', DevolucoesController::class);
        Route::resource('/avaliacaoPeriodicas', AvaliacoesPeriodicasController::class);
    
    });
    //coordenador
    Route::middleware(['coordenador'])->group(function () {
        Route::resource('/publicacoes', PublicacoesController::class);
        Route::resource('/murais', MuraisController::class);
        Route::resource('/autor', AutorController::class);
        Route::resource('/resenhas', ResenhasController::class);
        Route::resource('/reservas', ReservasController::class);
        //Route::resource('/multas', MultasController::class);
        Route::resource('/livros', LivrosController::class);
        Route::resource('/emprestimos', EmprestimosController::class);
        Route::resource('/devolucaos', DevolucoesController::class);
        Route::resource('/avaliacaoPeriodicas', AvaliacoesPeriodicasController::class);

    });
    //professor
    Route::middleware(['professor'])->group(function () {
        Route::resource('/publicacoes', PublicacoesController::class);
        

       // Route::get('/publicacoes', [PublicacoesController::class, 'index'] );
        Route::get('/murais', [MuraisController::class, 'index']);
        Route::resource('/autor', AutorController::class);
        Route::resource('/resenhas', ResenhasController::class);
        Route::resource('/reservas', ReservasController::class);
        //Route::resource('/multas', MultasController::class);
        Route::resource('/livros', LivrosController::class);
        Route::resource('/emprestimos', EmprestimosController::class);
        Route::resource('/devolucaos', DevolucoesController::class);
        Route::resource('/avaliacaoPeriodicas', AvaliacoesPeriodicasController::class);
    
    });

});
Route::resource('/secoes', SecoesController::class );
Route::resource('/categorias', CategoriasController::class);

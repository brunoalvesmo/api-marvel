<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonagensController;
use App\Http\Controllers\PersonagensQuadrinhosController;
use App\Http\Controllers\QuadrinhosController;
use Illuminate\Support\Facades\Route;

//Login do usuário
Route::post('/login', [LoginController::class, "index"])->name('login.index');

//Rotas Protegidas (Total: 10)
Route::middleware('auth:api')->group(function(){
    Route::get('/quadrinhos', [QuadrinhosController::class, "index"])->name('quadrinhos.index');
    Route::get('/quadrinhos/{id}', [QuadrinhosController::class, "show"])->name('quadrinhos.show');
    Route::post('/quadrinhos', [QuadrinhosController::class, "create"])->name('quadrinhos.create');
    Route::put('/quadrinhos/{id}', [QuadrinhosController::class, "update"])->name('quadrinhos.update');
    Route::delete('/quadrinhos/{id}', [QuadrinhosController::class, "delete"])->name('quadrinhos.delete');
    
    Route::get('/personagens', [PersonagensController::class, "index"])->name('personagens.index');
    Route::get('/personagens/{id}', [PersonagensController::class, "show"])->name('personagens.show');
    Route::post('/personagens', [PersonagensController::class, "create"])->name('personagens.create');
    Route::put('/personagens/{id}', [PersonagensController::class, "update"])->name('personagens.update');
    Route::delete('/personagens/{id}', [PersonagensController::class, "delete"])->name('personagens.delete');
});

//Rotas Livres
Route::get('/personagens-quadrinhos', [PersonagensQuadrinhosController::class, "index"])->name('personagensquadrinhos.index');
Route::get('/personagens-quadrinhos/personagem/{id}', [PersonagensQuadrinhosController::class, "showPersonagem"])->name('personagensquadrinhos.showPersonsagem');
Route::get('/personagens-quadrinhos/quadrinho/{id}', [PersonagensQuadrinhosController::class, "showQuadrinho"])->name('personagensquadrinhos.showQuadrinho');
Route::post('/personagens-quadrinhos', [PersonagensQuadrinhosController::class, "create"])->name('personagensquadrinhos.create');
Route::delete('/personagens-quadrinhos/{personagem_id}/{quadrinho_id}', [PersonagensQuadrinhosController::class, "deleteItem"])->name('personagensquadrinhos.delete');
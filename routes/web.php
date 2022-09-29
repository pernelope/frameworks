<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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

Route::get('/cardapio', function () {
    return view('cardapio');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::post('/envio', function () {
    return 1;
});


Route::get('/users', [UserController::class, 'index']);// listar (ou leitura)
Route::get('users/create', [UserController::class, 'create']);// criar usuário
Route::post('/users', [UserController::class, 'store']);// Slavar o Usuário
Route::get('users/{id}',[UserController::class, 'show']);// Atualizar usuário
Route::putt('users/{id}',[UserController::class, 'update']);// Atualizar usuário no banco de dados
Route::delete('/users/{id}', [UserController::class, 'destroy']);// Remover Usuário



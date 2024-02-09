<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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

Route::get('/', [UserController::class, 'index'])->name('home.login');

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/cadastrar', [UserController::class, 'showFormJersey'])->name('formulario-jersey');
Route::post('/cadastrar', [UserController::class, 'storeJersey'])->name('cadastrar-jersey');

Route::get('/todosJersey', [UserController::class, 'showJerseyGerenciador'])->name('todos-jersey');

Route::delete('/todosJsery/{id}',[UserController::class, 'destroy'])->name('delete-jersey');



Route::get('/alterar/{id}',[UserController::class, 'show'])->name('alterar-jersey');
Route::post('/alterarContato/{id}', [UserController::class, 'update'])->name('alterarBanco-jersey');


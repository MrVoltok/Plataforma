<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\GroupsController;

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

// PAGINA PRINCIPAL
Route::get('/', function () {
    return view('home');
})->middleware('auth');

// INICIO DE SESION
Route::get('/login', [SessionsController::class, 'index'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


// REGISTRO DE USUARIO
Route::get('/register', [RegisterController::class, 'index'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');


// GRUPOS
Route::get('/groups', [GroupsController::class, 'index'])
    ->middleware('auth')
    ->name('groups.index');

Route::get('/groups/create-group', [GroupsController::class, 'create'])
    ->middleware('auth')
    ->name('groups.create');

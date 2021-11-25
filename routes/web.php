<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnnouncementController;
use Illuminate\View\AnonymousComponent;

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
})->middleware('auth')
  ->name('homepage');

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


// PERFIL DE USUARIO
Route::get('/user', [ProfileController::class, 'index'])
    ->middleware('auth')
    ->name('profilePage.index');

// GRUPOS
Route::get('/groups', [GroupsController::class, 'index'])
    ->middleware('auth')
    ->name('groups.index');

Route::get('/groups/create-group', [GroupsController::class, 'create'])
    ->middleware('auth')
    ->name('groups.create');

Route::post('/groups/create-group',[GroupsController::class,'store'])
	->name('groups.store');

Route::get('/groups/group/{nombre}', [GroupsController::class, 'ingroup'])
    ->middleware('auth')
    ->name('ingroup.index');


// Mensajes
Route::get('/messages',[MessagesController::class,'index'])
    ->middleware('auth')
    ->name('messages.index');

Route::post('/messages/send-message',[MessagesController::class,'eventMessage'])
    ->middleware('auth')
    ->name('messages.event');


//Convocatorias
Route::get('/annoucement',[AnnouncementController::class,'index'])
    ->middleware('auth')
    ->name('announcement.index');

Route::get('/annoucement/create',[AnnouncementController::class,'create'])
    ->middleware('auth')
    ->name('announcement.create');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HorseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacunaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;

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

Route::get('/', function() {
    return view('home.index');
})->name('home');

Route::resource('/home', HomeController::class)->names('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::resource('/horses', HorseController::class)->names('horses');
    Route::resource('/users', UserController::class)->names('users');
    Route::resource('/posts', PostController::class)->names('posts');
    Route::resource('/email', EmailController::class)->names('email');
    Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
    Route::resource('/roles', RoleController::class)->names('roles');
    Route::resource('/vacunas', VacunaController::class)->names('vacunas');
});
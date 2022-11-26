<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HorseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacunaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;

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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::resource('/horses', HorseController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/vacunas', VacunaController::class);
    Route::resource('/home', HomeController::class);
    Route::resource('/email', EmailController::class);

    //Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
    Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
});

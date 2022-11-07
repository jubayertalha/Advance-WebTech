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

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'loginSubmit'])->name('login');
Route::get('/registration', [UserController::class, 'registration']);
Route::post('/registration', [UserController::class, 'registrationSubmit'])->name('registration');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/home', [UserController::class, 'home'])->name('home')->middleware('VerifyUser');

Route::get('/profile/{id}/edit', [UserController::class, 'edit'])->name('edit')->middleware('VerifyUser');
Route::post('/profile/{id}/edit', [UserController::class, 'editSubmit'])->name('editSubmit')->middleware('VerifyUser');
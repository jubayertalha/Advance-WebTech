<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/products',[PageController::class, 'products'])->name('products');
Route::get('/teams',[PageController::class, 'teams'])->name('teams');
Route::get('/about',[PageController::class, 'about'])->name('about');
Route::get('/contact',[PageController::class, 'contact'])->name('contact');
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/job-posts', [JobController::class, 'index']);
Route::post('/job-posts', [JobController::class, 'store']);
Route::delete('/job-posts/{id}', [JobController::class, 'destroy']);

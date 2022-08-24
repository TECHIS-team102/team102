<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\AccountController::class, 'login']);
Route::post('/account/auth', [App\Http\Controllers\AccountController::class, 'auth']);
Route::get('/account/form', [App\Http\Controllers\AccountController::class, 'form']);
Route::post('/account/register', [App\Http\Controllers\AccountController::class, 'register']);
Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout']);
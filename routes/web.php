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
Route::get('/login', [App\Http\Controllers\AccountController::class, 'login'])->name('login');
Route::post('/account/auth', [App\Http\Controllers\AccountController::class, 'auth']);
Route::get('/account/form', [App\Http\Controllers\AccountController::class, 'form']);
Route::post('/account/register', [App\Http\Controllers\AccountController::class, 'register']);
Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'can:admin-role']], function () {
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
    Route::post('/user/update', [App\Http\Controllers\UserController::class, 'update']);

    Route::get('/item/create', [App\Http\Controllers\ItemController::class, 'create'])->name('create');
    Route::post('/item/create', [App\Http\Controllers\ItemController::class, 'store'])->name('create');
    Route::get('/item/item',[\App\Http\Controllers\ItemController::class, 'item'])->name('item');
    Route::get('/item/edit', [App\Http\Controllers\ItemController::class, 'edit']);
    Route::get('/item/show', [App\Http\Controllers\ItemController::class, 'show']);

});
Route::group(['middleware' => ['auth', 'can:user-role']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
    Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
});

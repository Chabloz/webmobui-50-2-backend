<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('vuetest');
});

Route::get('/api/user/login', [App\Http\Controllers\User::class, 'login']);

Route::get('/api/user/logout', [App\Http\Controllers\User::class, 'logout'])
    ->middleware('auth.chat');

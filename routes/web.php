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
    $data = ['this is an example data from laravel', ' this is another example data from laravel'];
    return view('vuetest',  [
        'data' => $data,
    ]);
});

/* API */

Route::get('/api/user/login', [App\Http\Controllers\UserController::class, 'login']);

Route::group(['middleware' => 'auth.chat'], function () {
    Route::get('/api/user/logout', [App\Http\Controllers\UserController::class, 'logout']);
    Route::get('/api/msg/add', [App\Http\Controllers\MessageController::class, 'add']);
    Route::get('/api/msg/get', [App\Http\Controllers\MessageController::class, 'get']);
});

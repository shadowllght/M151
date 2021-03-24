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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'list']);

Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'detail']);

Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginPage']);

Route::get('/password_reset', function() {
    return redirect('https://google.ch');
});
Route::get('/register',[\App\Http\Controllers\UserController::class, 'registerPage']);
Route::post('/registerUser',[\App\Http\Controllers\UserController::class, 'registerUser']);




/* Route::get(url: '/produkte', function(){
    return "Produkte";
});

Route::get(url: '/produkte', [\App\Http\Controllers\ProductController::class])*/
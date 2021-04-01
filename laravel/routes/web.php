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
    return redirect('login');
});
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'list']);

Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'detail']);

Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginPage']);

Route::get('/register', [\App\Http\Controllers\UserController::class, 'registerPage']);

Route::post('/registerUser', [\App\Http\Controllers\UserController::class, 'registerUser']);

Route::post('login', [\App\Http\Controllers\UserController::class, 'login']);

Route::get('/userOrders', [\App\Http\Controllers\OrderItemController::class, 'addToCart']);




/* Route::get(url: '/produkte', function(){
    return "Produkte";
});

Route::get(url: '/produkte', [\App\Http\Controllers\ProductController::class])*/
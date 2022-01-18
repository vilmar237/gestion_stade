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

Route::get('/', [App\Http\Controllers\PublicController::class, 'welcome'])->name('welcome');
Route::post('user-login', [App\Http\Controllers\PublicController::class, 'user_login']);
Route::post('user-register', [App\Http\Controllers\PublicController::class, 'customer_register']);
Route::post('user-logout', [App\Http\Controllers\PublicController::class, 'user_logout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'client'],function () {
    Route::post('book', [App\Http\Controllers\PublicController::class, 'book'])->middleware('auth_user');
    Route::get('booking-history/{id}', [App\Http\Controllers\PublicController::class, 'booking_history'])->middleware('auth_user')->name('frontend.booking_history');
});

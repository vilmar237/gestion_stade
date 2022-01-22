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
Route::get('user-login', [App\Http\Controllers\PublicController::class, 'userlogin'])->name('user-login');
Route::post('user-login', [App\Http\Controllers\PublicController::class, 'user_login']);
Route::post('user-register', [App\Http\Controllers\PublicController::class, 'customer_register']);
Route::post('user-logout', [App\Http\Controllers\PublicController::class, 'user_logout']);

Route::group(['prefix' => 'admin'], function() {
    Auth::routes();
    Route::post("logout", [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
    Route::get("/", [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth']);
    
    // TypeTerrain Routes
    //Route::get('admin/typestade/{id}/delete',[App\Http\Controllers\TypeStadeController::class,'destroy']);
    Route::resource('typestade',App\Http\Controllers\TypeStadeController::class);

    // Room
    //Route::get('admin/stade/{id}/delete',[App\Http\Controllers\HomeController::class,'destroy']);
    //Route::resource('admin/stade',App\Http\Controllers\HomeController::class);

    // Booking
    //Route::get('admin/reservation/{id}/delete',[App\Http\Controllers\HomeController::class,'destroy']);
    //Route::get('admin/reservation/available-rooms/{checkin_date}',[App\Http\Controllers\HomeController::class,'available_rooms']);
    //Route::resource('admin/reservation',App\Http\Controllers\HomeController::class);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('book', [App\Http\Controllers\PublicController::class, 'book'])->middleware('auth_user');
Route::get('booking-history/{id}', [App\Http\Controllers\PublicController::class, 'booking_history'])->middleware('auth_user')->name('frontend.booking_history');


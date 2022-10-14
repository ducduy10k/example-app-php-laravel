<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

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

Route::get('/', [ListingController::class, 'index']);

Route::get('/hello', function () {
    return response( 'Hellow World', 200)->header('Content-Type', 'text/plain');
});

Route::get('/post/{id}', function ($id){
    dd($id); // Status 500
    return response('Post '. $id);
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request){
    dd($request->name . ' ' . $request->city);
});

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

Route::get('/listings/{id}', [ListingController::class, 'show']);


Route::get('/register', [UserController::class, 'create'])->middleware('guest'); // Guest -> khách hàng -> thực hiện được khi chưa có auth

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest'); // đặt tên cho router . Xem middleware auth sẽ sử dụng name router để redirect

Route::post('/login', [UserController::class, 'authenticate']);

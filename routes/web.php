<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return view('listings',[
        'heading'=> 'latest Listings',
        "listData" => [
            [
                "id"=>"1"
            ],
            [
                "id"=>"2"
            ]
        ]
    ]);
});

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
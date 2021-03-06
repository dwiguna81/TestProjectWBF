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

Route::get('/home', 'PublicController@home');

Route::get('/test', 'PublicController@test');

@Route::get('/search', 'PublicController@search');
@Route::get('/testsearch', 'PublicController@testsearch');
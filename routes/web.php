<?php

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
    return view('homepage');
});

Route::get('/signup-page', function () {
    return view('signup-page');
});

Route::get('/signin-page', function () {
    return view('signin-page');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

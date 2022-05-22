<?php

use App\Http\Controllers\UserController;

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




Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/search', function () {
    return view('search-page');
});

Route::get('/blog', function () {
    return view('blog');
});



// register a user
Route::get('/register', [UserController::class, 'create'])->middleware("guest");


// post request toregister a user
Route::post('/users', [UserController::class, 'store']);


// log out user
Route::post('/logout', [UserController::class, 'logout']);


// form for login a user
Route::get('/login', [UserController::class, 'login'])->name("login")->middleware("guest");

// authenticate user
Route::post('/login/authenticate', [UserController::class, 'authenticate']);

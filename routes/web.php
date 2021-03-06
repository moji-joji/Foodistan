<?php

use App\Http\Controllers\AjaxController;
use Clockwork\Request\Request;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ListingController;

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


Route::get('profile', [UserController::class, 'profile'])->middleware("auth");

// blog 
Route::post('/blog/{id}/delete', [BlogController::class, 'destroy']);
Route::get('/blog/{id}/edit', [BlogController::class, 'edit']);
Route::post('/blog/{id}/edit', [BlogController::class, 'makeEdit']);


Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/{id}', [BlogController::class, 'show']);

Route::post('blog', [BlogController::class, 'store']);



Route::get('/writeblog', [BlogController::class, 'writeblog'])->middleware("auth");

Route::get(
    '/listing/search',
    [ListingController::class, 'search']
);

// listing resteraunt
Route::post('/listing/{id}/toggleLike', [AjaxController::class, 'toggleLike']);

Route::post('/listing/{id}/review', [ReviewController::class, 'store']);
Route::post('/listing/{id}/review/{userId}/delete', [ReviewController::class, 'destroy']);


Route::get('/listing', [ListingController::class, 'index']);

Route::get('/listing/{id}', [ListingController::class, 'show']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('account');
});

Route::resource('/books', BookController::class);

Route::resource('/users', UserController::class);

Route::get('/account', function () {
    return view('account');
});

Route::get('/book-list','App\Http\Controllers\BookController@showBook');

// Route::get('/book-list', function () {
//     return view('Book');
// });

// Route::get('/addBooks', function () {
//     return view('booklist');
// });

Route::get('/addBooks','App\Http\Controllers\BookController@addBooks');

Route::get('/books-details/{id}','App\Http\Controllers\BookController@ViewBookDetail');

Route::get('/books-cart/{id}','App\Http\Controllers\BookController@addtocart');

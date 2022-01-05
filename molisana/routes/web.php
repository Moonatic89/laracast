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

// These name variables are added in, like, a navbar

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/products', function () {

// IMPORTANT! Pasta is the name of the file, and data is the name of the array.
// I can use db -> pasta, pasta -> data and maybe posts for news section
$pastas = config('pasta')['data'];
// $pastas = config('pasta.data'); works also


return view('products', compact('pastas'));
    
})->name('products');

Route::get('/news', function () {
    return view('news');
})->name('news');;
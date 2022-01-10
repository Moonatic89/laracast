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

    $seriesDB = config('seriesDB');
    $moreseriesDB = config('moreseriesDB');
    $trendseriesDB = config('trendseriesDB');
    $laravelnewDB = config('laravelnewDB');
    $levelupDB = config('levelupDB');


    return view('welcome', compact('seriesDB', 'moreseriesDB', 'trendseriesDB', 'laravelnewDB', 'levelupDB'));
});
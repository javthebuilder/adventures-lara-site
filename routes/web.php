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

Route::get('/affiliates', function () {
    return view('affiliates');
});

Route::get('/content', function () {
    return view('contents');
});

Route::get('/services', function () {
    return view('services');
});



Route::get('/team', function () {
    return view('team');
});


Route::get('/teams', function () {
    return view('team');
});

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/sample_two', function () {
    return view('sample_two');
});
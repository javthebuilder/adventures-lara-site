<?php

use App\Http\Controllers\ContentController;
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


Route::get('/content', [ ContentController::class, 'show_list' ])->name('content-list-show');

Route::get('/content/{name}', [ ContentController::class, 'show' ])->name('content-show');

Route::get('/services', function () {
    return view('services');
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::prefix('content_management')->middleware('auth')->name('c_m.')->group(function () {
//     Route::resource('/contents', ContentController::class);
    
// });


Route::get('/contents_list', [ ContentController::class, 'index' ])->name('content-list');
Route::get('/contents_list/create', [ ContentController::class, 'create' ])->name('content-create');
Route::post('/contents_list/save', [ ContentController::class, 'store' ])->name('content-save');
Route::get('/contents_list/edit/{id}', [ ContentController::class, 'edit' ])->name('content-edit');
Route::patch('/contents_list/update/{id}', [ ContentController::class, 'update' ])->name('content-update');
Route::delete('/contents_list/delete/{id}', [ ContentController::class, 'destroy' ])->name('content-destroy');
//Route::get('/contents_list/ate', [ ContentController::class, 'create' ])->name('content-create');
/*
Route::prefix('item_management')->middleware('auth', 'auth.isadmin')->name('item_stone_types.')->group(function () {
    Route::resource('/stone_types', StoneTypeController::class);    
});

<li><a href="{{ route('item_gold_karats.gold_karats.index') }}">Gold Karats</a></li>

*/



<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReportController;

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

Route::resource('/books', BookController::class);

Route::resource('/reports', ReportController::class);

Route::get('/side', function () {
    return view('sidebar');
});


//Route::get('search', [SearchController::class, 'index'])->name('search');

//Route::get('/autocomplete', [ReportController::class, 'autocomplete'])->name('autocomplete');


    Route::get('/autocomplete', 'ReportController@autocomplete');


//Route::get('products/frontend', [ProductController::class, 'frontend']);
//Route::get('products/backend', [ProductController::class, 'backend']);


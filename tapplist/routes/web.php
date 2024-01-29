<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



// beers/bar
Route::get('beers/bar', 
    'App\Http\Controllers\BeerController@bar'
);

// beers
Route::get('beers', 
    'App\Http\Controllers\BeerController@index'
);

// beers/create
Route::get('beers/create', 
    'App\Http\Controllers\BeerController@create'
);

// beers/store
Route::post('beers', 
    'App\Http\Controllers\BeerController@store'
)->name('beers.store');

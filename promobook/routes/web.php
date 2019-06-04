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
    return view('welcome');
});

Auth::routes();


Route::get('/promoboard', 'PostController@index')->name('PostController.index');
Route::post('/promoboard', 'PostController@store')->name('PostController.store');



Route::get('/promoplace', function(){
    return view('promoSection.promoPlace')->with(['name'=>"James Moriarty"]);
})->name('promoplace');

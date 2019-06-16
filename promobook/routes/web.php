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

Route::get('/home' , 'PostController@index')->name('PostController.index');
Route::get('/promoboard', 'PostController@index')->name('PostController.index');
Route::post('/promoboard', 'PostController@store')->name('PostController.store');
Route::get('/admin.index',function(){
    return view('DashboardAdmin.indexAdmin');
});

Route::get('/admin.sposor', 'SponsorController@index')->name('SponsorController.index');
Route::post('/admin.sposor', 'SponsorController@store')->name('SponsorController.store');

Route::get('/admin.category', 'CategoryController@index')->name('CategoryController.index');
Route::post('/admin.category', 'CategoryController@store')->name('CategoryController.store');
Route::delete('/admin.category', 'CategoryController@destroy')->name('CategoryController.destroy');

Route::get('/promoplace', function(){
    return view('promoSection.promoPlace')->with(['name'=>"James Moriarty"]);
})->name('promoplace');


Route::get('/admin.newpost', function(){
    return view('DashboardAdmin.newpost');
});

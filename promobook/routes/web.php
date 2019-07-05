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

Route::get('/', 'PostController@index');
Route::get('/search', 'SearchController@search')->name('Search');
Route::get('/filter', 'CategoryController@search')->name('Filter');
Auth::routes();

Route::group(['middleware'=>'auth'], function () {

    Route::get('/home' , 'PostController@index')->name('PostController.index');
    Route::get('/promoboard', 'PostController@index')->name('PostController.index');
    Route::post('/promoboard', 'PostController@store')->name('PostController.store');
    Route::get('/promoplace', function(){
        return view('promoSection.promoPlace');
    });

    Route::get('/admin', 'AllPostControllerAdmin@index')->name('AllPostControllerAdmin.index');
    Route::get('/admin/sponsor', 'SponsorController@index')->name('SponsorController.index');
    Route::post('/admin/sponsor', 'SponsorController@store')->name('SponsorController.store');
    Route::get('/admin/category', 'CategoryController@index')->name('CategoryController.index');
    Route::post('/admin/category', 'CategoryController@store')->name('CategoryController.store');
    Route::delete('/admin/category', 'CategoryController@destroy')->name('CategoryController.destroy');
    Route::get('/admin/newpost', function(){
        return view('DashboardAdmin.newpost');
    })->name('newpostadmin');

});

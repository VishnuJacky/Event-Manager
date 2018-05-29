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
    return view('app');
});


Route::resource('programs','ProgramsController');

Route::get('/programs','ProgramsController@index');
Route::get('/programs/create','ProgramsController@create');
Route::post('/programs/store','ProgramsController@store');
Route::get('/programs/show','ProgramsController@show');

Route::resource('categories','CategoriesController');

Route::get('/categories','CategoriesController@index');
Route::get('/categories/create','CategoriesController@create');
Route::post('/categories/store','CategoriesController@store');
Route::get('/categories/show','CategoriesController@show');
Route::get('/categories/edit','CategoriesController@edit');

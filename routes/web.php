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

Route::get('/home', 'HomeController@index');

Route::get('/years', 'YearController@index');
Route::get('/years/create', 'YearController@create');
Route::get('/years/{id}/edit', 'YearController@edit');
Route::post('/years/save', 'YearController@save');
Route::get('/years/{id}/delete', 'YearController@delete');

Route::get('/students', 'StudentController@index');
Route::get('/students/{id}/edit', 'StudentController@edit');
Route::post('/students/save', 'StudentController@save');
Route::get('/students/{id}/delete', 'StudentController@delete');
Route::get('/students/create', 'StudentController@create');




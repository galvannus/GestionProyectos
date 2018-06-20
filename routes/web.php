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

Route::get('/', 'PagesController@home');
Route::get('/projects/show','ProjectsController@show');
Route::post('/projects/create','ProjectsController@create')->middleware('auth');
Route::get('/projects/form','ProjectsController@form')->middleware('auth');
Auth::routes();
Route::get('/carreras/show','CareersController@show');
Route::get('/carreras/form','CareersController@form')->middleware('auth');
Route::post('/carreras/create','CareersController@create')->middleware('auth');
Route::get('/carreras/showproject/{career_name}', 'CareersController@showproject');

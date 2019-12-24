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

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::get('/portfolio','ProjectController@index')->name('projects.index');
Route::get('/portfolio/crear','ProjectController@create')->name('projects.create');
Route::post('/portfolio','ProjectController@store')->name('projects.store');
Route::get('/portfolio/{project}','ProjectController@show')->name('projects.show');

Route::view('/contact','contact')->name('contact');
Route::post('contact','MessageController@store')->name('messages.store');

//Route::resource('/portfolio','ProjectController');
//Route::resource('proyectos','PortfolioApiController');
//Route::resource('/portfolio','ProjectController')->only(['update','destroy']);
//Route::resource('/portfolio','ProjectController')->except(['update','destroy']);
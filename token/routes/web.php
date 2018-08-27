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

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/note/create', 'NoteController@index')->name('note.create');
});

Route::group(['prefix' => 'api', 'middleware' => 'auth:api'], function () {
    Route::post('/note/store', 'NoteController@store')->name('note.store');
});


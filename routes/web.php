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
    return view('publicViews.index');
});

Route::get('/results', function () {
    return view('publicViews.results');
});

Route::get('/test', function () {
    return view('publicViews.testResults');
});

Route::get('/login', function () {
    return view('publicViews.login');
});

Route::get('/welcome', function () {
    return view('privateViews.welcome');
});

Route::get('/usuarios', function () {
    return view('privateViews.users');
});

/*Question CRUD routes */
Route::get('/preguntas', 'QuestionController@index')->name('qList');

Route::get('/pregunta/{id}', 'QuestionController@show')->name('question');

Route::get('/datos de pregunta/{id}', 'QuestionController@edit')->name('qSettings');

Route::put('/datos de pregunta/{id}', 'QuestionController@update')->name('qSettings');

Route::get('/registrar pregunta', 'QuestionController@create')->name('addQForm');

Route::post('/registrar pregunta', 'QuestionController@store')->name('addQ');

Route::delete('/pregunta/{id}', 'QuestionController@destroy')->name('qDelete');

/*Administrators CRUD routes */
Route::get('/administradores', 'AdministratorsController@index')->name('adminList');

Route::get('/administrador/{id}', 'AdministratorsController@show')->name('admin');

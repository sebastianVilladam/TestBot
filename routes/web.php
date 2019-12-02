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

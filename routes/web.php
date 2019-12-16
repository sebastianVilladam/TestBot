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

Route::get('/welcome professors', function () {
    return view('professorsViews.welcome');
});

Route::get('/usuarios', function () {
    return view('privateViews.users');
});

/*Question CRUD routes */
Route::get('/preguntas', 'QuestionController@index')->name('qList');

Route::get('/preguntas docente', 'QuestionController@indexP')->name('PqList');

Route::get('/pregunta/{id}', 'QuestionController@show')->name('question');

Route::get('/mi pregunta/{id}', 'QuestionController@showP')->name('Pquestion');

Route::get('/datos de pregunta/{id}', 'QuestionController@edit')->name('qSettings');

Route::get('/datos de mi pregunta/{id}', 'QuestionController@editP')->name('PqSettings');

Route::put('/datos de pregunta/{id}', 'QuestionController@update')->name('qSettings');

Route::put('/datos de mi pregunta/{id}', 'QuestionController@updateP')->name('PqSettings');

Route::get('/registrar pregunta', 'QuestionController@create')->name('addQForm');

Route::post('/registrar pregunta', 'QuestionController@store')->name('addQ');

Route::delete('/pregunta/{id}', 'QuestionController@destroy')->name('qDelete');

Route::delete('/mi pregunta/{id}', 'QuestionController@destroyP')->name('PqDelete');

/*Administrators CRUD routes */
Route::get('/administradores', 'AdministratorsController@index')->name('adminList');

Route::get('/administrador/{id}', 'AdministratorsController@show')->name('admin');

Route::get('/datos de administrador/{id}', 'AdministratorsController@edit')->name('adminSettings');

Route::put('/datos de administrador/{id}', 'AdministratorsController@update')->name('adminSettings');

Route::get('/registrar administrador', 'AdministratorsController@create')->name('addAdminForm');

Route::post('/registrar administrador', 'AdministratorsController@store')->name('addAdmin');

Route::delete('/administrador/{id}', 'AdministratorsController@destroy')->name('adminDelete');

/*Professors CRUD routes */
Route::get('/docentes', 'ProfessorsController@index')->name('profList');

Route::get('/docente/{id}', 'ProfessorsController@show')->name('prof');

Route::get('/datos de docente/{id}', 'ProfessorsController@edit')->name('profSettings');

Route::put('/datos de docente/{id}', 'ProfessorsController@update')->name('profSettings');

Route::get('/registrar docente', 'ProfessorsController@create')->name('addProfForm');

Route::post('/registrar docente', 'ProfessorsController@store')->name('addProf');

Route::delete('/docente/{id}', 'ProfessorsController@destroy')->name('profDelete');

/*Subjects CRUD routes */
Route::get('/asignaturas', 'EventsController@index')->name('subjectsList');

Route::get('/asignatura/{id}', 'EventsController@show')->name('subject');

Route::get('/datos de asignatura/{id}', 'EventsController@edit')->name('subjectSettings');

Route::put('/datos de asignatura/{id}', 'EventsController@update')->name('subjectSettings');

Route::get('/registrar asignatura', 'EventsController@create')->name('addSubjectForm');

Route::post('/registrar asignatura', 'EventsController@store')->name('addSubject');

Route::delete('/asignatura/{id}', 'EventsController@destroy')->name('subjectDelete');

Route::get('/seleccion', 'SelectedController@index')->name('selectList');

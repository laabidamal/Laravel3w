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

Route::get('/', 'TestController@showClassroomList');


Route::get('/classroom/list', 'TestController@showClassroomList')->name('showClassroomList');

Route::get('/classroom/add', 'TestController@showAddClassroom')->name('showAddClassroom');

Route::post('/classroom/add', 'TestController@handleAddClassroom')->name('handleAddClassroom');

Route::get('/student/add', 'TestController@showAddStudent')->name('showAddStudent');

Route::post('/student/add', 'TestController@handleAddStudent')->name('handleAddStudent');

Route::get('/student/delete/{id}', 'TestController@handleDeleteStudent')->name('handleDeleteStudent');

Route::get('/student/view/{id}', 'TestController@showViewStudent')->name('showViewStudent');

Route::get('/student/update/{id}', 'TestController@showUpdateStudent')->name('showUpdateStudent');

Route::post('/student/update/{id}', 'TestController@handeleUpdateStudent')->name('handeleUpdateStudent');
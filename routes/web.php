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
Route::get('/login','loginController@index');
Route::post('/login','loginController@verify');
Route::get('/home','adminController@home');
Route::get('/home/adduser','adminController@adduser');
Route::get('/home/addcourse','adminController@addcourse');

Route::get('/CoursesResult', 'studentController@CoursesResult');


Route::get('/EditUser', 'studentController@EditUser');


Route::get('/Email', 'studentController@Email');

Route::get('/Email/Emaildelete', 'studentController@Emaildelete');

Route::get('/GradeReport', 'studentController@GradeReport');


Route::get('/Library', 'studentController@Library');

Route::get('/Notice', 'studentController@Notice');

Route::get('/Notice/NoticeDelete', 'studentController@NoticeDelete');

Route::get('/Profile/password', 'studentController@password');

Route::get('/portal', 'studentController@portal');

Route::get('/Profile', 'studentController@Profile');






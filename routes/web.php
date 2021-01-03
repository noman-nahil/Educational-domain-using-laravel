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

Route::get('/logout', 'logoutController@index')->middleware('session');

Route::get('/login','loginController@index');
Route::get('/login/github','loginController@github');
Route::get('/login/github/redirect','loginController@githubRedirect');

//admin
Route::get('/home','adminController@home');

Route::get('/home/edit','adminController@edit');
Route::post('/home/edit','adminController@update');

Route::get('/home/adduser','adminController@adduser');
Route::post('/home/adduser','adminController@userstore');

Route::get('/home/user/{id}','adminController@user')->name('admin.user');//
Route::post('/home/user/{id}','adminController@useredit');

Route::get('/home/delete/{id}','adminController@delete')->name('admin.delete');
Route::post('/home/delete/{id}','adminController@del');

Route::get('/home/teacherlist','adminController@test')->name('admin.teacherlist');//
Route::post('/home/teacherlist','adminController@teacherlist');
Route::get('/home/studentlist','adminController@studentlist');
Route::get('/home/addcourse','adminController@addcourse');//coursestore
Route::post('/home/addcourse','adminController@coursestore');

Route::get('/home/book','adminController@book');
Route::post('/home/book','adminController@bookstore');

Route::get('/home/password','adminController@password');
Route::post('/home/password','adminController@passUpdate');

Route::get('/home/addcourse','adminController@addcourse');


//adminend
Route::get('/CoursesResult', 'studentController@CoursesResult')->middleware('session');
Route::post('/CoursesResult/actionCourse', 'studentController@actionCourse')->name('CoursesResult.actionCourse')->middleware('session');

Route::get('/Email', 'studentController@Email')->middleware('session');
Route::get('/Email/Emaildelete/{id}', 'studentController@Emaildelete')->middleware('session');
Route::post('/Email/Emaildelete/{id}', 'studentController@delete')->middleware('session');


Route::get('/GradeReport', 'studentController@GradeReport')->middleware('session');


Route::get('/Registration', 'studentController@Registration')->middleware('session');


Route::get('/Library', 'studentController@test')->name('student.Library')->middleware('session');

Route::get('/Notice', 'studentController@Notice')->middleware('session');
Route::get('/Notice/NoticeDelete/{id}', 'studentController@NoticeDelete')->middleware('session');
Route::post('/Notice/NoticeDelete/{id}', 'studentController@delete_notice')->middleware('session');

Route::get('/Profile/password', 'studentController@password')->middleware('session');
Route::post('/Profile/password','studentController@passUpdate')->middleware('session');

Route::get('/portal', 'studentController@portal')->middleware('session');

Route::get('/Profile', 'studentController@Profile')->middleware('session');
Route::get('/pdf', 'studentController@pdf')->middleware('session');

//teacher

Route::get('/teacher', 'teacherController@home');
Route::get('/teacher/notice', 'teacherController@notice');
Route::post('/teacher/notice', 'teacherController@noticePost');
Route::get('/teacher/checkNotice', 'teacherController@checkNotice');
Route::get('/teacher/delete/{id}','teacherController@delete');
Route::get('/teacher/edit/{id}','teacherController@editNotice');
Route::post('/teacher/edit/{id}','teacherController@updateNotice');
Route::get('/teacher/studentList','teacherController@showStudent');
Route::get('/teacher/tsf','teacherController@showTsf');
Route::get('/teacher/tsfedit/{id}','teacherController@editTsf');
Route::post('/teacher/tsfedit/{id}','teacherController@updatetsf');
Route::get('/teacher/clasRoutine','teacherController@showRoutine');
Route::get('/teacher/gradelist','teacherController@showgrade');







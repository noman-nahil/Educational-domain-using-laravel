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
Route::get('/logout', 'logoutController@index');

//admin
Route::get('/home','adminController@home');

Route::get('/home/edit','adminController@edit');
Route::post('/home/edit','adminController@update');

Route::get('/home/adduser','adminController@adduser');
Route::post('/home/adduser','adminController@userstore');

Route::get('/home/user/{id}','adminController@user')->name('admin.user');
Route::post('/home/user/{id}','adminController@useredit');

Route::get('/home/delete/{id}','adminController@delete')->name('admin.delete');
Route::post('/home/delete/{id}','adminController@del');

Route::get('/home/teacherlist','adminController@teacherlist');
Route::get('/home/studentlist','adminController@studentlist');
Route::get('/home/addcourse','adminController@addcourse');
Route::get('/home/book','adminController@book');
Route::get('/home/password','adminController@password');
Route::post('/home/password','adminController@passUpdate');

Route::get('/home/addcourse','adminController@addcourse');


//adminend
Route::get('/CoursesResult', 'studentController@CoursesResult');

Route::post('/Profile/EditUser','studentController@update');

Route::get('/Email', 'studentController@Email');

Route::get('/Email/Emaildelete/{id}', 'studentController@Emaildelete');
Route::post('/Email/Emaildelete/{id}', 'studentController@delete');


Route::get('/GradeReport', 'studentController@GradeReport');


Route::get('/Library', 'studentController@Library');

Route::get('/Notice', 'studentController@Notice');
Route::get('/Notice/NoticeDelete/{id}', 'studentController@NoticeDelete');
Route::post('/Notice/NoticeDelete/{id}', 'studentController@delete_notice');

Route::get('/Profile/password', 'studentController@password');

Route::get('/portal', 'studentController@portal');

Route::get('/Profile', 'studentController@Profile');
Route::get('/pdf', 'studentController@pdf');

//teacher

Route::get('/teacher', 'teacherController@home');
Route::get('/teacher/notice', 'teacherController@notice');
Route::post('/teacher/notice', 'teacherController@noticePost');
Route::get('/teacher/checkNotice', 'teacherController@checkNotice');
Route::get('/teacher/delete/{id}','teacherController@delete');
Route::get('/teacher/edit/{id}','teacherController@editNotice');
Route::post('/teacher/edit/{id}','teacherController@updateNotice');






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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','adminController@page');

Route::get('/login','loginController@index');
Route::post('/login','loginController@verify');

Route::get('/logout', 'logoutController@index');

Route::get('/login','loginController@index');
Route::get('/login/github','loginController@github');
Route::get('/login/github/redirect','loginController@githubRedirect');

//admin
Route::group(['middleware'=>['chck']], function(){
    Route::group(['middleware'=>['sesn']], function(){

Route::get('/home','adminController@home')->name('admin.home');



Route::get('/home/edit','adminController@edit')->name('admin.edit');
Route::post('/home/edit','adminController@update');

Route::get('/home/adduser','adminController@adduser')->name('admin.adduser');
Route::post('/home/adduser','adminController@userstore');

Route::get('/home/user/{id}','adminController@user')->name('admin.user');//
Route::post('/home/user/{id}','adminController@useredit');

Route::get('/home/delete/{id}','adminController@delete')->name('admin.delete');
Route::post('/home/delete/{id}','adminController@del');

Route::get('/home/teacherlist','adminController@test')->name('admin.teacherlist');//
Route::post('/home/teacherlist','adminController@teacherlist');
Route::get('/home/studentlist','adminController@student')->name('admin.studentlist');
Route::post('/home/studentlist','adminController@studentlist');
Route::get('/home/addcourse','adminController@addcourse');//coursestore
Route::post('/home/addcourse','adminController@coursestore');

Route::get('/home/editcourse/{id}','adminController@editcourse')->name('admin.editcourse');
Route::post('/home/editcourse/{id}','adminController@courseupdate');

Route::get('/home/deletecourse/{id}','adminController@deletecourse')->name('admin.deletecourse');
Route::post('/home/deletecourse/{id}','adminController@coursedelete');

Route::get('/home/news','adminController@news')->name('admin.news');
Route::post('/home/news','adminController@addnews');

Route::get('/home/newsedit/{id}','adminController@newsedit')->name('admin.newsedit');
Route::post('/home/newsedit/{id}','adminController@newsupdate');

Route::get('/home/newsdelete/{id}','adminController@newsdelete')->name('admin.newsdelete');
Route::post('/home/newsdelete/{id}','adminController@newsdel');

Route::get('/home/request','adminController@request');
Route::post('/home/request','adminController@userstore');

Route::get('/home/book','adminController@book');
Route::post('/home/book','adminController@bookstore');

Route::get('/home/deletebook/{id}','adminController@deletebook')->name('admin.deletebook');
Route::post('/home/deletebook/{id}','adminController@bookdelete');

Route::get('/home/password','adminController@password');
Route::post('/home/password','adminController@passUpdate');

Route::get('/home/search','adminController@search');

    });
});

//adminend
    Route::group(['middleware'=>['session']], function(){
    //Route::group(['middleware'=>['check']], function(){
Route::get('/CoursesResult', 'studentController@testCourse')->name('student.CoursesResult');
Route::post('/CoursesResult', 'studentController@CoursesResult');

Route::get('/Email', 'studentController@Email');
Route::get('/Email/Emaildelete/{id}', 'studentController@Emaildelete');
Route::post('/Email/Emaildelete/{id}', 'studentController@delete');


Route::get('/GradeReport', 'studentController@GradeReport');


Route::get('/Registration', 'studentController@Registration');


Route::get('/Library', 'studentController@test')->name('student.Library');
Route::post('/Library', 'studentController@Library');


Route::get('/Notice', 'studentController@Notice');
Route::get('/Notice/NoticeDelete/{id}', 'studentController@NoticeDelete');
Route::post('/Notice/NoticeDelete/{id}', 'studentController@delete_notice');

Route::get('/Profile/password', 'studentController@password');
Route::post('/Profile/password','studentController@passUpdate');

Route::get('/portal', 'studentController@portal');

Route::get('/Profile', 'studentController@Profile');

Route::get('/CoursesResult/printDetails', 'studentController@CoursePdf');

Route::get('/Library/printlibrary','studentController@Librarypdf');

});
//});

//teacher

Route::group(['middleware'=>['sess']], function(){

Route::get('/teacher', 'teacherController@home');
Route::get('/teacher/notice', 'teacherController@notice');
Route::post('/teacher/notice', 'teacherController@noticePost');
Route::get('/teacher/checkNotice', 'teacherController@checkNotice');
Route::get('/teacher/delete/{id}','teacherController@delete');
Route::get('/teacher/edit/{id}','teacherController@editNotice');
Route::post('/teacher/edit/{id}','teacherController@updateNotice');
Route::get('/teacher/studentList','teacherController@showStudent')->name('teacher.studentList');
Route::get('/teacher/tsf','teacherController@showTsf');
Route::get('/teacher/tsfedit/{id}','teacherController@editTsf');
Route::post('/teacher/tsfedit/{id}','teacherController@updatetsf');
Route::get('/teacher/clasRoutine','teacherController@showRoutine');
Route::get('/teacher/gradelist','teacherController@showgrade');
Route::get('/teacher/gradeedit/{id}','teacherController@editGrade');
Route::post('/teacher/gradeedit/{id}','teacherController@updateGrade');
Route::get('/teacher/password', 'teacherController@password');
Route::post('/teacher/password','teacherController@passUpdate');
Route::get('/teacher/fileupload', 'teacherController@fileupload');
Route::post('/teacher/fileupload','teacherController@insertfile');
Route::get('/teacher/showfilelist', 'teacherController@showfilelist');
Route::get('/teacher/pdf', 'teacherController@studentpdf');
Route::get('/teacher/gradepdf', 'teacherController@gradepdf');
Route::get('/teacher/verify', 'teacherController@verify');




Route::post('/teacher/studentList', 'teacherController@searchResult');


});


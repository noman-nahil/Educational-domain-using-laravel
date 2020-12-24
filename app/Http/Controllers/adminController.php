<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    function home(){
        return view('admin.home');
    }
    function edit(){
        return view('admin.edit');
    }
    function user(){
        return view('admin.user');
    }
    function adduser(){
        return view('admin.adduser');
    }
    function addcourse(){
        return view('admin.addcourse');
    }
    function book(){
        return view('admin.book');
    }
    function password(){
        return view('admin.password');
    }
}

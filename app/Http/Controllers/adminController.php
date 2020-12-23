<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    function home(){
        return view('admin.home');
    }
    function adduser(){
        return view('admin.adduser');
    }
    function addcourse(){
        return view('admin.addcourse');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;
use DB;

class adminController extends Controller
{
    function home(Request $req){
       /* $users = DB::table('userinfo')->get();
        return view('admin.home')->with('users',$users);*/
        //echo "$users";
        $id = $req->session()->get('username');
        $user = userModel::find($id);
        return view('admin.home',$user);
    }
    function edit(Request $req){
        $id = $req->session()->get('username');
        $user = userModel::find($id);
        return view('admin.edit',$user);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    function index(){
        return view('login.login');
    }
    function verify(Request $req){
        //return view('welcome');
        if($req->username =='admin'){
           return redirect('/home');
        }/*
        else if($req->id=='teacher'){
            //redirect('/home');
         }
         else if($req->id=='student'){
            //redirect('/home');
         }*/

        else{
            return view('welcome');
        }

    }
}

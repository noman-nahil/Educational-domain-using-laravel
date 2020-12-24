<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class loginController extends Controller
{
    //
    function index(){
        return view('login.login');
    }
    function verify(Request $req){
        //return view('welcome');
        if($req->username =='Admin'){
           return redirect('/home');
        }
        else if($req->username =='student'){
            return redirect('/portal');
         }
        //  else if($req->id=='student'){
        //     //redirect('/home');
        //  }

        else{
            return view('welcome');
        }

    }
}

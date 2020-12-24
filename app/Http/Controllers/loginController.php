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
<<<<<<< HEAD
        else if($req->username=='student'){
            redirect('/portal');
=======
        else if($req->username =='student'){
            return redirect('/portal');
>>>>>>> 61a2504fb6d0919e4b1ee9ff9b56a3eeb19c4369
         }
        //  else if($req->id=='student'){
        //     //redirect('/home');
        //  }

        else{
            return view('welcome');
        }

    }
}

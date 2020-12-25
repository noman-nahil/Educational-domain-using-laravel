<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\userModel;
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
        else if($req->username=='student'){
            redirect('/portal');
        }
        else if($req->username =='student'){
            return redirect('/portal');
         }
        //  else if($req->id=='student'){
        //     //redirect('/home');
        //  }

        $users = userModel:: where ('id',$req->username)
                            ->where('password',$req->password)
                            ->get();
            if(count($users) > 0){
               
                $userStatus = userModel::find($req->username)->status;
                if($userStatus == 'Active'){
                    $userType = userModel::find($req->username)->type;
                    if($userType== 'Admin'){
                        //echo "$userType";
                        return redirect('/home');
                    }
                    else if($userType== 'Teacher'){
                        echo "$userType";
                    }
                    else if($userType== 'Student'){
                        return redirect('/portal');
                    }
                    else{
                        echo "opps!! type error";
                    }
                }
                else{
                    echo "opps!! Inactive";
                }           
            }
            else{
                $req->session()->flash('msg', 'invalid username/password');
                    return redirect('/login');
            }

    }
}

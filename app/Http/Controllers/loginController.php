<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\userModel;
class loginController extends Controller
{
    function index(){
        return view('login.login');
    }
    function verify(Request $req){
        $users = userModel:: where ('id',$req->username)
                            ->where('password',$req->password)
                            ->get();
            if(count($users) > 0){
                $userStatus = userModel::find($req->username)->status;
                if($userStatus == 'Active'){
                    $userType = userModel::find($req->username)->type;
                    if($userType== 'Admin'){
                        //echo "$userType";
                        $req->session()->put('username', $req->username);
                        $req->session()->put('type',$userType);
                        return redirect('/home');
                    }
                    else if($userType== 'Teacher'){
                        $req->session()->put('username', $req->username);
                        echo "$userType";
                    }
                    else if($userType== 'Student'){
                        $req->session()->put('username', $req->username);
                        return redirect('/portal');
                    }
                    else{
                        echo "opps!! type error";
                    }
                }
                else{

                    //echo "opps!! Inactive";
                    $req->session()->flash('msg', 'opps!! Inactive');
                    return redirect('/login');
                }
            }           
            else{
                $req->session()->flash('msg', 'invalid username/password');
                    return redirect('/login');
            }

    }
}
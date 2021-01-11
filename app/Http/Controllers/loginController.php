<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\userModel;
<<<<<<< HEAD
use Socialite;
use App\user;
use App\Http\Requests\LoginRequest;
use Validator;



=======
use Auth;
use Socialite;
use App\user;
use App\Http\Requests\UserRequest;
>>>>>>> e4024cf394f3022ba5ec573316edfa1aac74d6c5
class loginController extends Controller
{
    function index(){
        return view('login.login');
    }
<<<<<<< HEAD
    function verify(LoginRequest $req){
=======
    function verify(UserRequest $req){
>>>>>>> e4024cf394f3022ba5ec573316edfa1aac74d6c5
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
                        return redirect('/teacher');
                        
                    }
                    else if($userType =='Student'){
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
    public function github(){
        return Socialite::driver('github')->redirect();

    }
    public function githubRedirect(Request $req){
        $user = Socialite::driver('github')->user()->email;
        
       //echo "$user";
     $users = userModel:: where ('email',$user)->get();
       //echo $users[0]['email'];
       
      if(count($users)>0){
         echo "$users";
        if($users[0]['status']=='Active'){
            if($users[0]['type']=='Admin'){
                $req->session()->put('username',$users[0]['id']);
                    $req->session()->put('type',$users[0]['type']);
                    return redirect('/portal');
            }
            else if($users[0]['type']=='Teacher'){
                $req->session()->put('username', $users[0]['id']);
                        return redirect('/teacher');

            }
            else if($users[0]['type']=='Student'){
                $req->session()->put('username',$users[0]['id']);
                return redirect('/portal');
            }
            else{
                echo "opps!! type error";
            }
        }
        else{
            $req->session()->flash('msg', 'opps!! Inactive');
                    return redirect('/login');

         }
       }
    }


}
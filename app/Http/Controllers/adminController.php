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
    function update(Request $req){
        $id = $req->session()->get('username');
        
        $user = userModel::find($id);
        //echo "$user";
        //$user = new userModel();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->gender = $req->gender;
        $user->address = $req->address;
        $user->dob = $req->dob;
        $user->contact = $req->contact;
        $user->blood = $req->blood;
        $user->save();

        return redirect('/home');
    }

    function user(){
        return view('admin.user');
    }
    function adduser(){
        return view('admin.adduser');
    }
    function userstore(Request $req){
       $id = DB::table('userinfo')->max('id');
    
        $password= sprintf("%06d", mt_rand(1, 999999));
     
        $user = new userModel();
        $user->id = $id+1;
        $user->name = $req->name;
        $user->username = "";
        $user->email = $req->email;
        $user->password =  $password;
        $user->gender = $req->gender;
        $user->address = $req->address;
        $user->dob = $req->dob;
        $user->contact = $req->contact;
        $user->blood = $req->blood;
        $user->status = $req->status;
        $user->type = $req->type;

        if($user->save()){
            $req->session()->flash('addmsg', 'Added Successfully');
            return redirect('/home/adduser');
        }else{
            $req->session()->flash('addmsg', 'Something Wrong');
            return redirect('/home/adduser');
        }
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;
use DB;
use PDF;

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

    function user($id,Request $req){
        $user = userModel::find($id);
        return view('admin.user',$user);    
    }
    function useredit($id,Request $req){
        
        $user = userModel::find($id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->gender = $req->gender;
        $user->address = $req->address;
        $user->dob = $req->dob;
        $user->contact = $req->contact;
        $user->blood = $req->blood;
        $user->status = $req->status;
        $user->save();
        $usertype = userModel::find($id)->type;
        if($usertype=="Teacher")
        {
            $req->session()->flash('upmsg', 'Update Successfully');
            return redirect('/home/teacherlist');
        }
        else{
            $req->session()->flash('upmsg', 'Update Successfully');
            return redirect('/home/studentlist');
        }
        
    }
    function delete($id,Request $req){
        $user = userModel::find($id);
        return view('admin.delete',$user);    
    }
    function del($id,Request $req){
        $usertype = userModel::find($id)->type;
        if($usertype=="Teacher")
        {
            DB::table('userinfo')->delete($id);
            $req->session()->flash('upmsg', 'Delete Successfully');
            return redirect('/home/teacherlist');
        }
        else{
            DB::table('userinfo')->delete($id);
            $req->session()->flash('upmsg', 'Delete Successfully');
            return redirect('/home/studentlist');
        }   
    }

    function adduser(Request $req){
        return view('admin.adduser');
    }
    function userstore(Request $req){
       $id = DB::table('userinfo')->max('id');
    
        $password= sprintf("%06d", mt_rand(1, 999999));
        $newID =$id+1;
        $user = new userModel();
        $user->id = $newID ;
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
            
            $data =[
                'name' => $req->name,
                'email' => $req->email,
                'ID'=> $newID,
                'password'=> $password,
            ];

                $pdf = PDF::loadView('admin.print', $data); 
                return $pdf->download("$newID.pdf"); 
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
    function book(Request $req){
        $id = $req->session()->get('username');
        $user = userModel::find($id);
        return view('admin.book',$user);
    }
    function password(Request $req){
        $id = $req->session()->get('username');
        $user = userModel::find($id);
        return view('admin.password',$user);
    }
    function passUpdate(Request $req){
        $id = $req->session()->get('username');
        $pass = userModel::find($id)->password;
        if($req->oldpass==$pass){
            //echo "$pass";
            if($req->newpass==$req->newpass2 && $req->newpass2!=""){
                //echo "$req->newpass";
                $user = userModel::find($id);

                $user->password=$req->newpass;
                $user->save();

                $req->session()->flash('passmsg', 'Password change Successfully');
                return redirect('/home/password'); 
            }
            else{
                $req->session()->flash('passmsg', "Password didn't match");
                return redirect('/home/password'); 
                //echo "Not same";password didn't match
            }
        }
        else{
            $req->session()->flash('passmsg', "Current password isn't correct");
            return redirect('/home/password'); 
        }
        
    }
    function teacherlist(){
        $list = DB ::table('userinfo')->where('type','Teacher')
                                    ->get();
        $list->transform(function($i) {
            return (array)$i;
            });
        $users = $list->toArray(); 
        //echo "$list";                           
        return view('admin.teacherlist')->with("users",$users);
    }
    function studentlist(){
        $list = DB ::table('userinfo')->where('type','Student')
                                    ->get();
        $list->transform(function($i) {
            return (array)$i;
            });
        $users = $list->toArray(); 
        //echo "$list";                           
        return view('admin.studentlist')->with("users",$users);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;
use App\course;
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
        $list = DB ::table('userinfo')->where('type','Teacher')
                                    ->get();
        $list->transform(function($i) {
            return (array)$i;
            });
        $users = $list->toArray(); 
        //echo "$list";                           
        return view('admin.addcourse')->with("users",$users);
    }
    function coursestore(Request $req){
        $id = DB::table('subject')->max('id');
        $course = new course();
        $newID =$id+1;
        $course->id = $newID ;
        $course->courseName = $req->courseName;
        $course->courseTime = $req->courseTime;
        $course->courseDay = $req->courseDay;
        $course->courseTeacher = $req->courseTeacher;

        if($course->save()){
            $req->session()->flash('coursemsg', 'Added Successfully');
            return redirect('/home/addcourse');

        }
        
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
    function test(){
        $list = DB ::table('userinfo')->where('type','Student')
                                    ->get();
        $list->transform(function($i) {
            return (array)$i;
            });
        $users = $list->toArray(); 
        //echo "$list";                           
        return view('admin.teacherlist')->with("users",$users);
    }
    function teacherlist(Request $req){
        /*$list = DB ::table('userinfo')->where('type','Teacher')
                                    ->get();
        $list->transform(function($i) {
            return (array)$i;
            });
        $users = $list->toArray(); 
        //echo "$list";                           
        return view('admin.teacherlist')->with("users",$users);*/
       /* if($req->ajax()){
            $output = '';
            $query = $req->get('query');
            if($query != '')
            {
                $data = DB::table('userinfo')
                ->where('id', 'like', '%'.$query.'%')
                -get();
            }
            else{
                $data = DB ::table('userinfo')//->where('type','Student')
                ->get();
            }
            $total_row = $data->count();
            if($total_row>0){
                foreach($data as $row)
                    {
                        $output .= '
                        <tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->name.'</td>
                        <td>'.$row->email.'</td>
                        <td>'.$row->gender.'</td>
                        <td>'.$row->address.'</td>
                        <td>'.$row->dob.'</td>
                        <td>'.$row->contact.'</td>
                        <td>'.$row->blood.'</td>
                        <td>'.$row->status.'</td>
                        <td><a href="">Edit</a> &nbsp <a>Delete</a></td>
                        </tr>
                        ';
                    }
                }
                else
                    {
                    $output = '
                    <tr>
                        <td align="center" colspan="5">No Data Found</td>
                    </tr>
                    ';
                    }
                    $data = array(
                        'table_data'  => $output,
                        'total_data'  => $total_row
                       );
                       echo json_encode($data);
        }*/
        //new method
        $query = $req->get('query');

        $users = userModel::where('type','Student')
        ->where('id','like','%'.$query.'%')
        ->get();

        return json_encode($users);
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

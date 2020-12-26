<?php
namespace App\Http\Controllers;
use App\GradeReport as AppGradeReport;
use Illuminate\Http\Request;
use App\Models\GradeReports;
use App\Models\Profile;
use App\profile as AppProfile;
use App\portal as Appportal;
use App\notice as Appnotice;
use DB;

class studentController extends Controller
{
    public function CoursesResult(){
        $users=DB::table('userinfo')
        ->select('select * from userinfo');
        return view('student.CoursesResult',['user'=>$users]);
}
public function EditUser(){
    return view('student.EditUser');

}
public function Email(){
    $data = Appnotice::all();
    return view('student.Email',['data'=>$data]);

}
public function Emaildelete(){
    return view('student.Emaildelete');

}
public function GradeReport(){
     $data= DB::table('course')
     ->join('userinfo', 'userinfo.username', '=', 'course.username')
    ->select('userinfo.username','userinfo.name','userinfo.email','course.id','course.courseName','course.grade')
    ->get();
    return view('student.GradeReport',['data'=>$data]);
}
public function Library(){
    return view('student.Library');

}
public function Notice(){
    $data = Appnotice::all();
    return view('student.Notice' ,['data'=>$data]);

}
public function NoticeDelete(){
    return view('student.NoticeDelete');
}
public function password(){
    return view('student.password');

}
public function portal(Request $req){ 
    $data = Appportal::all();
     return view('student.portal',['data'=>$data]);
    
}
public function Profile(Request $req){
    $data =  DB::table("userinfo") ->where('id', 2006)->get(); 
    
    return view ('student.Profile',['data'=>$data]);

}
}

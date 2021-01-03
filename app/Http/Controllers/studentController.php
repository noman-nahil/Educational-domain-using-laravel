<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\userModel;
use App\portal as Appportal;
use App\notice as Appnotice;
use DB;
use PDF;
use App\course;
use App\searchCourse;

class studentController extends Controller
{
    public function CoursesResult(){
        $data = course::all();
     return view('student.CoursesResult',$data);
}
function actionCourse(Request $request)
    {
     if($request->ajax())
     {
      $data = searchCourse::search($request->get('CoursesResult_query'))->get();
      //echo $data;
      return response()->json($data);
     }
    }
public function update(Request $req){
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
    return redirect('/Profile');
}
public function Email(){
    $data = Appnotice::all();
    return view('student.Email',['data'=>$data]);

}
public function Emaildelete($id){
    $user = Appnotice::find($id);
    return view('student.Emaildelete',$user);
}
public function delete($id){
    $user=Appnotice::find($id);
     $user->delete();
    return redirect('/Email');
  }
public function pdf()
{
    $data = $this->GradeReport();
    return view('pdf')->with('data',$data);
}
public function GradeReport(Request $req){
    $id = $req->session()->get('username');
    $user = userModel::find($id);
     $data= DB::table('course')
     ->join('userinfo', 'userinfo.id', '=', 'course.username')
    ->select('userinfo.username','userinfo.name','userinfo.email','course.id','course.courseName','course.grade')
    ->get();
    return view('student.GradeReport',$user,['data'=>$data]);
}
public function Library(){
    return view('student.Library');

}

public function Notice(){
    $data = Appnotice::all();
    return view('student.Notice' ,['data'=>$data]);
}
public function NoticeDelete($id){
    $user = Appnotice::find($id);
   return view('student.NoticeDelete',$user);
}
public function delete_notice($id){
    $user=Appnotice::find($id);
     $user->delete();
    return redirect('/Notice');
  }
public function password(Request $req){
    $id = $req->session()->get('username');
    $user = userModel::find($id);
    return view('student.password',$user);
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
            return redirect('/Profile/password'); 
        }
        else{
            $req->session()->flash('passmsg', "Password didn't match");
            return redirect('/Profile/password'); 
            //echo "Not same";password didn't match
        }
    }
    else{
        $req->session()->flash('passmsg', "Current password isn't correct");
        return redirect('/Profile/password'); 
    }
    
}

public function portal(Request $req){ 
    $data = Appportal::all();
     return view('student.portal',['data'=>$data]);
    
}
function Profile(Request $req){
    $id = $req->session()->get('username');
        $user = userModel::find($id);
return view('student.Profile',$user);
 }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;
use App\noticePost; 
use App\tsfList;
use App\classRoutine; 
use App\grade; 
use App\fileUpload; 
<<<<<<< HEAD
use DB;
use PDF;
use App\Http\Requests\UserRequest;
use Validator;
=======

use DB;
>>>>>>> e4024cf394f3022ba5ec573316edfa1aac74d6c5

class teacherController extends Controller
{
    function home(Request $req){
         $id = $req->session()->get('username');
         $user = userModel::find($id);
         return view('teacher.home',$user);
}

function notice(Request $req){
 
    return view('teacher.notice');
}

function noticePost(UserRequest $req){

    $noticePost = new noticePost();
    $noticePost->teacherId = $req->session()->get('username');
    $noticePost->notice    =  $req->text;
    if($noticePost->save()){
        return redirect('/teacher/checkNotice');
    }else{
      echo "Fail to post notice";
    }
  
  }

function checkNotice(Request $req){
    $noticePost=noticePost::all();
    return view('teacher.checkNotice')->with('noticePost',$noticePost);
}


public function delete($id){
    $noticePost=noticePost::find($id);
     $noticePost->delete();
    return redirect('/teacher/checkNotice');
  }

  public function editNotice($id){
    $noticePostEdit=noticePost::find($id);
    return view('teacher.editNotice',$noticePostEdit);
  }


  public function updateNotice($id, Request $req){
    $noticeUpdate=noticePost::find($id);
    $noticeUpdate->notice    = $req->update;
    
    $noticeUpdate->save(); 
    return redirect('/teacher/checkNotice');
  
  }
  
  
  function showStudent(Request $req){
    $studentList=userModel::where('type','Student')
    ->get();
    
    return view('teacher.studentList')->with('studentList',$studentList);
    
  }
  

public function showTsf(){
  $users=tsfList::all();
  return view('teacher.showTsf')->with('users',$users);
}


public function editTsf($id){
  $user=tsfList::find($id);
  return view('teacher.editTsf',$user);
}

public function updatetsf($id, Request $req){
  $user=tsfList::find($id);
  $user->slot1     = $req->slot1;
  $user->slot2     = $req->slot2;
  $user->slot3         = $req->slot3;
  $user->slot4         = $req->slot4;
  $user->save(); 

  return redirect('/teacher/tsf');

}

public function showRoutine(){
  $users=classRoutine::all();
  return view('teacher.showRoutine')->with('users',$users);
}

public function showgrade(){
  $users=grade::all();
  return view('teacher.showgrade')->with('users',$users);
}

 
public function editGrade($id){

  $user=grade::find($id);
  return view('teacher.gradeedit',$user);
<<<<<<< HEAD
  
          }

    public function updateGrade($id, Request $req){
            $user=grade::find($id);
            $user->Midterm     = $req->Midterm;
            $user->Finalterm    = $req->Finalterm;
            
            
            $num1 =$req->Midterm; 
            $int1 = (int)$num1;
            $num2 =$req->Finalterm; 
            $int2 = (int)$num2;
            $int3 = $int1+$int2;
            
            
            
            
            $user->Total         =  $int3;
            $user->save(); 
          
            return redirect('/teacher/gradelist');
          
          }


          public function password(Request $req){
            $id = $req->session()->get('username');
            $user = userModel::find($id);
            return view('teacher.password',$user);
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
                  return redirect('/teacher'); 
              }
              else{
                  $req->session()->flash('passmsg', "Password didn't match");
                  return redirect('/teacher'); 
                  //echo "Not same";password didn't match
              }
          }
          else{
              $req->session()->flash('passmsg', "Current password isn't correct");
              return redirect('/teacher'); 
          }
          
      }
      
      public function fileupload(){
        return view('teacher.fileupload'); 
    }

    public function insertfile(Request $req){
      if($req->hasFile('fileup')){
        $file= $req->file('fileup');

       /*echo "File name: ".$file->getClientOriginalName().'</br>';
        echo "File extension: ".$file->getClientOriginalExtension().'</br>';
        echo "File size: ".$file->getSize();
        */
        if($file->move('upload',$file->getClientOriginalName())){
      
          $user = new fileUpload();
          $user->sec     = $req->sec;
          $user->filename  = $file->getClientOriginalName();
    
          if($user->save()){
              return redirect('/teacher');
          }else{
            return redirect("/teacher/fileupload");
          }
        }
        else{
    
          return redirect("/teacher/fileupload");
    
         }
  }

}

public function showfilelist(){
  $users=fileUpload::all();
  return view('teacher.showfilelist')->with('users',$users);
  
}

public function studentpdf(){
  
  $list=userModel::where('type','Student')
              ->get();
              // $pdf = PDF::loadView('teacher.print')->with('data',$data);
             // $pdf = PDF::loadView('teacher.studentList',$studentList); 
              //$pdf = PDF::loadHTML("<h1> Anik Sikder </h1>"); 
              $pdf = PDF::loadView('teacher.print',compact('list'));
               return $pdf->download('document.pdf');
           //return view('teacher.print')->with('studentList',$studentList);
  
}


public function searchResult(Request $req)
    {
        $query = $req->get('query');
        $users = userModel::where('type','Student')
                           ->where('id','like','%'.$query.'%')
                           ->get();
        return json_encode($users);
     return view('teacher.studentList');
}


public function gradepdf(){
  
  $users=grade::all();
              // $pdf = PDF::loadView('teacher.print')->with('data',$data);
             // $pdf = PDF::loadView('teacher.studentList',$studentList); 
              //$pdf = PDF::loadHTML("<h1> Anik Sikder </h1>"); 
              $pdf = PDF::loadView('teacher.gradeprint',compact('users'));
               return $pdf->download('document.pdf');
           //return view('teacher.print')->with('studentList',$studentList);
  
}


public function verify(Request $req){ 

  $client = new \GuzzleHttp\Client();

      $response = $client->request('GET', 'http://localhost:3000');
      
      if($response->getStatusCode()==200){
      $data= json_decode($response->getBody(), true);
      dd($data);

      //return view('student.Registration',['data'=>$data]);
      }else{
          return "SERVER IS RESPONDING";
      }
  // $data = Appportal::all();
  //  return view('student.Registration',['data'=>$data]);
  } 


=======
  
          }

    public function updateGrade($id, Request $req){
            $user=grade::find($id);
            $user->Midterm     = $req->Midterm;
            $user->Finalterm    = $req->Finalterm;
            
            
            $num1 =$req->Midterm; 
            $int1 = (int)$num1;
            $num2 =$req->Finalterm; 
            $int2 = (int)$num2;
            $int3 = $int1+$int2;
            
            
            
            
            $user->Total         =  $int3;
            $user->save(); 
          
            return redirect('/teacher/gradelist');
          
          }


          public function password(Request $req){
            $id = $req->session()->get('username');
            $user = userModel::find($id);
            return view('teacher.password',$user);
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
                  return redirect('/teacher'); 
              }
              else{
                  $req->session()->flash('passmsg', "Password didn't match");
                  return redirect('/teacher'); 
                  //echo "Not same";password didn't match
              }
          }
          else{
              $req->session()->flash('passmsg', "Current password isn't correct");
              return redirect('/teacher'); 
          }
          
      }
      
      public function fileupload(){
        return view('teacher.fileupload'); 
    }

    public function insertfile(Request $req){
      if($req->hasFile('fileup')){
        $file= $req->file('fileup');

       /*echo "File name: ".$file->getClientOriginalName().'</br>';
        echo "File extension: ".$file->getClientOriginalExtension().'</br>';
        echo "File size: ".$file->getSize();
        */
        if($file->move('upload',$file->getClientOriginalName())){
      
          $user = new fileUpload();
          $user->sec     = $req->sec;
          $user->filename  = $file->getClientOriginalName();
    
          if($user->save()){
              return redirect('/teacher');
          }else{
            return redirect("/teacher/fileupload");
          }
        }
        else{
    
          return redirect("/teacher/fileupload");
    
         }
  }

}

public function showfilelist(){
  $users=fileUpload::all();
  return view('teacher.showfilelist')->with('users',$users);
  
}


>>>>>>> e4024cf394f3022ba5ec573316edfa1aac74d6c5
}
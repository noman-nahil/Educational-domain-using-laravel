<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;
use App\noticePost; 

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

function noticePost(Request $req){
     
    $noticePost = new noticePost();
    $noticePost->teacherId = $req->session()->get('username');
    $noticePost->notice        =  $req->text;
    if($noticePost->save()){
        return redirect('/teacher');
    }else{
      echo "Fail to post notice";
    }
}

function checkNotice(Request $req){
    $noticePost=noticePost::all();
    return view('teacher.checkNotice')->with('noticePost',$noticePost);
}

}
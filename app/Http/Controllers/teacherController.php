<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userModel;

class teacherController extends Controller
{
    function home(Request $req){
         $id = $req->session()->get('username');
         $user = userModel::find($id);
         return view('teacher.home',$user);
}

}
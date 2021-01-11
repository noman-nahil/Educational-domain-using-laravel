<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\userModel;
use App\course;
use App\bookmodel;
use App\news;
use App\library;
use DB;
use PDF;
use Validator;

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
        
        $validation = Validator::make($req->all(),[
            'name'=>'required|min:5',
            'email'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'contact'=>'required',
            'dob'=>'required',
            'blood'=>'required',
        ]);
        if($validation->fails()){
            return redirect()
                            ->back()
                            ->withInput()
                            ->with('errors',$validation->errors());
        }
        else{
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
    
            return redirect()->route('admin.home'); 
        }
        
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
        //userValidation
       $validation = Validator::make($req->all(),[
        'name'=>'required|min:5',
        'email'=>'required',
        'gender'=>'required',
        'address'=>'required',
        'contact'=>'required|min:11',
        'dob'=>'required',
        'blood'=>'required',
    ]);
    if($validation->fails()){
        return redirect()
                        ->route('admin.adduser')
                        ->withInput()
                        ->with('errors',$validation->errors());
                        //echo "$validation->errors()";
    }else{
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
        
    }
    function addcourse(){
        $list = DB ::table('userinfo')->where('type','Teacher')
                                    ->get();
        $list->transform(function($i) {
            return (array)$i;
            });
        $users = $list->toArray(); 
        $courselist = DB ::table('subject')->get();
        $courselist->transform(function($i) {
            return (array)$i;
            });
        $courses = $courselist->toArray();
        //echo "$list";                           
        return view('admin.addcourse')->with("users",$users)
                                    ->with("courses",$courses);
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
        $Booklist = DB ::table('library')->get();
        $Booklist->transform(function($i) {
            return (array)$i;
            });
        $books = $Booklist->toArray();
        return view('admin.book')->with("books",$books);
    }
    function bookstore(Request $req){
        $id = DB::table('library')->max('bookId');
        $newID =$id+1;
        $book = new bookmodel();
        $book->bookId = $newID ;
        $book->bookName = $req->bookName;
        $book->author = $req->author;
        $book->category = $req->category;
        if($book->save()){
            $req->session()->flash('bookmsg', 'Added Successfully');
            return redirect('/home/book');
        }

    }
    function deletebook($bookId){
        $book = library::find($bookId);
        return view('admin.deletebook',$book);
    }
    function bookdelete($bookId,Request $req){
        $user=library::find($bookId);
        $user->delete();
        $req->session()->flash('bookmsg', 'Delete Successfully');
        return redirect('/home/book');
        
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
        $list = DB ::table('userinfo')->where('type','Teacher')
                                    ->get();
        $list->transform(function($i) {
            return (array)$i;
            });
        $users = $list->toArray(); 
        //echo "$list";                           
        return view('admin.teacherlist')->with("users",$users);
    }
    function teacherlist(Request $req){
<<<<<<< HEAD
        $query = $req->get('query');

        $users = userModel::where('type','Teacher')
        ->where('id','like','%'.$query.'%')
        ->get();

        return json_encode($users);
    }
    function student(){
        $list = DB ::table('userinfo')->where('type','Student')
                                    ->get();
        $list->transform(function($i) {
            return (array)$i;
            });
        $users = $list->toArray();                            
        return view('admin.studentlist')->with("users",$users);
    }
    function studentlist(Request $req){
=======
>>>>>>> 2a895a1e3859d2ed9abcd2ada654da8dfc172c4f
        $query = $req->get('query');

        $users = userModel::where('type','Student')
        ->where('id','like','%'.$query.'%')
        ->get();

        return json_encode($users);
    }
<<<<<<< HEAD
    function news(){
        $list = DB ::table('news')->get();
        $list->transform(function($i) {
            return (array)$i;
            });
        $news = $list->toArray();       
        return view('admin.news')->with("news",$news);
    }
    function addnews(Request $req){
        if($req->hasFile('myimg')){
            $file = $req->file('myimg');
            if($file->move('upload', $file->getClientOriginalName())){

               // echo "Success";
               $id = DB::table('news')->max('id');
               $newID =$id+1;
                $news = new news();
                $news->id     =  $newID =$id+1;;
                $news->title     = $req->title;
                $news->body     = $req->body;
                $news->req1     = $req->req1;
                $news->req2     = $req->req2;
                $news->req3     = $req->req3;
                $news->req4     = $req->req4;
                $news->req5     = $req->req5;
                $news->req6     = $req->req6;
                $news->myimg  = $file->getClientOriginalName();
                if($news->save()){
                    $req->session()->flash('newsmsg', "Added Succesfully");
                    return redirect()->route('admin.news');
                }else{
                    $req->session()->flash('newsmsg', "Something Wrong");
                    return redirect()->route('admin.news');
                }

            }
        }
        else{
            $req->session()->flash('newsmsg', "You have to select Image");
            return redirect()->route('admin.news');
        } 
    }
    function newsedit($id,Request $req){
        //echo "$id";
        $news = news::find($id);
        return view('admin.newsedit',$news);

    }
    function newsupdate($id,Request $req){
        $news = news::find($id);
        $news->title    = $req->title;
        $news->body     = $req->body;
        $news->req1     = $req->req1;
        $news->req2     = $req->req2;
        $news->req3     = $req->req3;
        $news->req4     = $req->req4;
        $news->req5     = $req->req5;
        $news->req6     = $req->req6;
        $news->save();
        $req->session()->flash('newsmsg', "Update Succesfully");
        return redirect('/home/news');
    }
    function newsdelete($id,Request $req){
        //echo "$id";
        $news = news::find($id);
        return view('admin.newsdelete',$news);

    }
    function newsdel($id,Request $req){
        //echo "$id";
        DB::table('news')->delete($id);
        $req->session()->flash('newsmsg', "Delete Succesfully");
        return redirect('/home/news');

    }
    function search(){
        return view('admin.search');
    }
    function request(Request $req){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://localhost:3000');
            if($response->getStatusCode()==200){
                $data= json_decode($response->getBody(), true);
               // echo $data['name'];
               return view('admin.request',$data);
    
                }
                else{
                   echo "Something wrong";
                     }
        }


        function page(){
            $list = DB ::table('news')->get();
            $list->transform(function($i) {
                    return (array)$i;
                        });
                    $news = $list->toArray();      
                   // echo $list;                      
            return view('welcome')->with("news",$news);
            
        }
        function editcourse($id,Request $req){
            $list = DB ::table('userinfo')->where('type','Teacher')
=======
    function student(){
        $list = DB ::table('userinfo')->where('type','Student')
>>>>>>> 2a895a1e3859d2ed9abcd2ada654da8dfc172c4f
                                    ->get();
        $list->transform(function($i) {
            return (array)$i;
            });
<<<<<<< HEAD
        $users = $list->toArray(); 
        $course = course::find($id);
            return view('admin.editcourse',$course)->with("users",$users);
                                            
        }
        function courseupdate($id,Request $req){
            $course = course::find($id);
            $course->courseName = $req->courseName;
            $course->courseTime = $req->courseTime;
            $course->courseDay = $req->courseDay;
            $course->courseTeacher = $req->courseTeacher;
            $course->save();
            $req->session()->flash('coursemsg', 'Update Successfully');
            return redirect('/home/addcourse');

        }
        function deletecourse($id,Request $req){
            $list = DB ::table('userinfo')->where('type','Teacher')
                                    ->get();
        $list->transform(function($i) {
            return (array)$i;
            });
        $users = $list->toArray(); 
        $course = course::find($id);
            return view('admin.deletecourse',$course)->with("users",$users);
                                            
        }
        function coursedelete($id,Request $req){
            DB::table('subject')->delete($id);
            $req->session()->flash('coursemsg', 'Delete Successfully');
            return redirect('/home/addcourse');

        }


        //SERVER IS NOT RESPONDING
      
  
=======
        $users = $list->toArray();                            
        return view('admin.studentlist')->with("users",$users);
    }
    function studentlist(Request $req){
        $query = $req->get('query');

        $users = userModel::where('type','Student')
        ->where('id','like','%'.$query.'%')
        ->get();

        return json_encode($users);
    }
>>>>>>> 2a895a1e3859d2ed9abcd2ada654da8dfc172c4f

}

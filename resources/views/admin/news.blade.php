<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/fonts/icomoon/style.css">

  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/jquery-ui.css">
  <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../../assets/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../../assets/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../../assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

  <link rel="stylesheet" href="../../assets/css/aos.css">
  <link href="../../assets/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
          </div>
          <div class="col-lg-6 text-right">
            <a href="" class="small mr-3"><span class=""></span>Change Password</a>
            <a href="/logout" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Logout</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="listboard">
        <div class="d-flex align-items-center">
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                    <a href="/home" class="nav-link text-left">Home</a>
                  </li>
                <li>
                  <a href="/home/adduser" class="nav-link text-left">Add New User</a>
                </li>
                <li>
                  <a href="/home/addcourse" class="nav-link text-left">Add New Course</a>
                </li>
                <li>
                    <a href="/home/teacherlist" class="nav-link text-left">Teacher List</a>
                  </li>
                  <li>
                    <a href="/home/studentlist" class="nav-link text-left">Student List</a>
                  </li>
                <li>
                  <a href="/home/book" class="nav-link text-left">Book</a>
                </li>
              </ul>                                                                                                                                                                                                                  
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
            <p>Welcome,{{session('name')}}</p>
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('../../assets/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Settings</h2>
             <p></p>
            </div>
          </div>
        </div>
      </div> 


    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                <h5>{{session('newsmsg')}}</h5>
                  <form method="post" enctype="multipart/form-data">
                      <div class="row">
                            <div class="col-12 form-group"> 
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control form-control-lg">
                            </div>
                          <div class="col-12 form-group">
                              <textarea name="body" rows="6" cols="50">
                              </textarea>
                          </div>
                          <div class="col-12 form-group"> 
                          <label for="myimg">Image</label>
                                <input type="file" name="myimg" class="form-control form-control-lg" Placeholder="">
                          </div>
                          <div class="col-12 form-group"> 
                                <input type="text" name="req1" class="form-control form-control-lg" Placeholder="Requirment 1">
                          </div>
                          <div class="col-12 form-group"> 
                                <input type="text" name="req2" class="form-control form-control-lg" Placeholder="Requirment 2">
                          </div>
                          <div class="col-12 form-group"> 
                                <input type="text" name="req3" class="form-control form-control-lg" Placeholder="Requirment 3">
                          </div>
                          <div class="col-12 form-group"> 
                                <input type="text" name="req4" class="form-control form-control-lg" Placeholder="Requirment 4">
                          </div>
                          <div class="col-12 form-group"> 
                                <input type="text" name="req5" class="form-control form-control-lg" Placeholder="Requirment 5">
                          </div>
                          <div class="col-12 form-group"> 
                                <input type="text" name="req6" class="form-control form-control-lg" Placeholder="Requirment 6">
                          </div>
                      </div>
                    <div class="row">
                        <div class="col-12 form-group">
                          <input type="submit" value="Post"name="submit" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                  </form>
                </div>
                    
              </div>
            </div>
        </div>
    

    <div>
    <div class="col-12">
                    <div class="row">
                            <table class="table">
                            <thead>
                                <tr>
                                  <td>ID</td>
                                    <td>Title</td>
                                    <td>Description</td>
                                    <td>REquirement 1</td>
                                    <td>REquirement 2</td>
                                    <td>REquirement 3</td>
                                    <td>REquirement 4</td>
                                    <td>REquirement 5</td>
                                    <td>REquirement 6</td>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($news as $new)  
                                <tr class="col-6">
                                    <td>{{$new['id']}}</td>
                                    <td>{{$new['title']}}</td>
                                    <td>{{$new['body']}}</td>
                                    <td>{{$new['req1']}}</td>
                                    <td>{{$new['req2']}}</td>
                                    <td>{{$new['req3']}}</td>
                                    <td>{{$new['req4']}}</td>
                                    <td>{{$new['req5']}}</td>
                                    <td>{{$new['req6']}}</td>
                                    <td><a href="{{route('admin.newsedit',$new['id'])}}">Edit</a>&nbsp<a href="{{route('admin.newsdelete',$new['id'])}}">Delete</a></td>
                                </tr>
                                @endforeach 
                              </tbody>                       
                            </table>  
                      </div>
                    </div>
    </div>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="../../assets/js/jquery-3.3.1.min.js"></script>
  <script src="../../assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../assets/js/jquery-ui.js"></script>
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/owl.carousel.min.js"></script>
  <script src="../../assets/js/jquery.stellar.min.js"></script>
  <script src="../../assets/js/jquery.countdown.min.js"></script>
  <script src="../../assets/js/bootstrap-datepicker.min.js"></script>
  <script src="../../assets/js/jquery.easing.1.3.js"></script>
  <script src="../../assets/js/aos.js"></script>
  <script src="../../assets/js/jquery.fancybox.min.js"></script>
  <script src="../../assets/js/jquery.sticky.js"></script>
  <script src="../../assets/js/jquery.mb.YTPlayer.min.js"></script>




  <script src="../../assets/js/main.js"></script>

</body>

</html>
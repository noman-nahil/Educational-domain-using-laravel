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
            <a href="/home/password" class="small mr-3"><span class=""></span>Change Password</a>
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
                  <a href="/home/adduser" class="nav-link text-left">Add New User</a>
                </li>
                <li>
                    <a href="/home/teacherlist" class="nav-link text-left">Teacher List</a>
                  </li>
                  <li>
                    <a href="/home/studentlist" class="nav-link text-left">Student List</a>
                  </li>
                  <li>
                    <a href="/home/search" class="nav-link text-left">Search</a>
                  </li>
                <li>
                  <a href="/home/addcourse" class="nav-link text-left">Add New Course</a>
                </li>
                <li>
                  <a href="/home/book" class="nav-link text-left">Book</a>
                </li>
                <li>
                  <a href="/home/news" class="nav-link text-left">News</a>
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
              <h2 class="mb-0">My Information</h2>
             <p></p>
            </div>
          </div>
        </div>
      </div> 


    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                       <div class="col-md-12 form-group">
                            <label for="username">Name:</label>
                            <input type="text" id="name" name="name" value="{{$name}}" class="form-control form-control-lg" disabled> 
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Name:</label>
                            <input type="text" id="name" name="name" value="{{$name}}" class="form-control form-control-lg" disabled> 
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="{{$email}}" class="form-control form-control-lg" disabled> 
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="gender">Gender</label>
                            <input type="text"  name="gender" value="{{$gender}}" class="form-control form-control-lg" disabled> 
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="dob">Birthday</label>
                            <input type="text" name="dob" value="{{$dob}}" class="form-control form-control-lg" disabled> 
                        </div>
                         <div class="col-md-12 form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" value="{{$address}}" class="form-control form-control-lg" disabled> 
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="dob">Contact</label>
                            <input type="text" name="contact" value="{{$contact}}" class="form-control form-control-lg" disabled> 
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="gender">Blood Group</label>
                            <input type="text"  name="blood" value="{{$blood}}" class="form-control form-control-lg" disabled> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                          <a href="/home/edit" class="small btn btn-primary px-4 py-2 rounded-0"><span class=""></span> Edit</a>
                        </div>
                    </div>
                </div>
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
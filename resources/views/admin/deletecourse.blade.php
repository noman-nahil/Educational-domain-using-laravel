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

  <link rel="stylesheet" href="css/aos.css">
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
            <a href="/admin/password" class="small mr-3"><span class=""></span>Change Password</a>
            <a href="/logout" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Logout</a>
          </div>
        </div>

        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="listboard">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="" class="d-block">
             
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="/home" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="/home/adduser" class="nav-link text-left">Add user</a>
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
              <h2 class="mb-0">Add New Course</h2>
             <p></p>
            </div>
          </div>
        </div>
      </div> 


    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                  <form method="post">
                    <div class="row">
                    <div class="col-md-3 offset-md-4">
                      <h5>{{session('coursemsg')}}</h5>
                      </div>
                        <div class="col-md-12 form-group">
                            <label for="courseName">Course Name</label>
                            <input type="text" name="courseName" value="{{$courseName}}" class="form-control form-control-lg" readonly> 
                    
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="courseTime">Course Time</label>
                            <select class="form-control form-control-lg" name="courseTime">
                            @foreach(array("8.00-10.00","10.00-12.00","12.00-2.00","2.00-4.00") as $time)
                            @if($time==$courseTime)
                            {
                              <option value="{{$time}}" selected="selected">{{$time}}</option>
                            }
                            @else{
                                <option value="{{$time}}">{{$time}}</option>
                              }
                              @endif
                            @endforeach
                            
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                          <label for="courseDay">Course Day</label>
                          <select name="courseDay"class="form-control form-control-lg">
                          @foreach(array("Sunday-Tuesday","Monday-Wednesday") as $day)
                              @if($day==$courseDay)
                              {
                                <option value="{{$day}}" selected="selected">{{$day}}</option>
                              }
                              @else{
                                <option value="{{$day}}">{{$day}}</option>
                              }
                              @endif
                            @endforeach
                          </select>
                      </div>
                         <div class="col-md-12 form-group">
                            <label for="courseTeacher">Course Teacher</label>
                            <select name="courseTeacher" class="form-control form-control-lg">
                            @foreach($users as $user)

                            @if($user['id']==$courseTeacher)
                              {
                                <option value="{{$user['id']}}" selected="selected">{{$user['id']}}&nbsp&nbsp{{$user['name']}}</option>
                              }
                              @else{
                                <option value="{{$user['id']}}">{{$user['id']}}&nbsp&nbsp{{$user['name']}}</option>
                              }
                              @endif
                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Delete" name="submit" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                  </form>
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
  <script type="text/javascript">
  //var  ID= $('#courseId');
  var dropdown = $('#courseList');
    dropdown.empty();
    dropdown.append('<option selected="true" disabled>Choose a course</option>');
    dropdown.prop('selectedIndex', 0);
    $.getJSON('../../assets/json/course.json', function (data) {
      $.each(data, function (key, entry) {
        dropdown.append($('<option></option>').attr('value', entry.courseName).text(entry.courseName));      
      })
    });
   
  </script>

</body>

</html>
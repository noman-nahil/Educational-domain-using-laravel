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
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
          </div>

        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="" class="d-block">
              <img src="../../assets/images/logo.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li>
                  <a href="/teacher" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="/teacher/notice" class="nav-link text-left">PostNotice</a>
                </li>
                <li>
                  <a href="/teacher/checkNotice" class="nav-link text-left">CheckNotice</a>
                </li>
                <li>
                  <a href="/teacher/studentList" class="nav-link text-left">ViewStudents</a>
                </li>
                <li>
                  <a href="/teacher/tsf" class="nav-link text-left">Tsf</a>
                </li>
                <li>
                  <a href="/teacher/clasRoutine" class="nav-link text-left">classRoutine</a>
                </li>
                <li>
                  <a href="/teacher/gradelist" class="nav-link text-left">GradeList</a>
                </li>
                <li>
                  <a href="/teacher/password" class="nav-link text-left">change password</a>
                </li>
                <li>
<<<<<<< HEAD
                  <a href="/teacher/fileupload" class="nav-link text-left">fileupload</a>
                </li>
                <li>
                  <a href="/teacher/showfilelist" class="nav-link text-left">fileList</a>
                </li>
=======
                  <a href="/teacher/fileupload" class="nav-link text-left">File upload</a>
                </li>

>>>>>>> e4024cf394f3022ba5ec573316edfa1aac74d6c5
                <li>
                  <a href="/logout" class="nav-link text-left">Logout</a>
                </li>

<<<<<<< HEAD
             
=======
>>>>>>> e4024cf394f3022ba5ec573316edfa1aac74d6c5
              </ul>                                                                                                                                                                                                                  
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
                <p>Welcome, Anik Sikder</p>
               
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
              <h2 class="mb-0">Student List</h2>
             <p></p>
            </div>
          </div>
        </div>
      </div> 


    <div class="site-section">
        <div class="container">



    <div>

      <h3 align='center'>List</h3>
      <p align='right'><a class="btn btn-danger" href="/teacher/pdf" role="button">Pdf</a></p>
      <div class="row">
                        <div class="col-md-4 offset-md-4 form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search Your Id" />
                        </div>
                    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Address</th>
          <th scope="col">DOB</th>
          <th scope="col">Contact</th>
          <th scope="col">Blood</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody id="temporary-table">

            @foreach($studentList as $user)
                                <tr>
                                    <td>{{$user['id']}}</td>
                                    <td>{{$user['name']}}</td>
                                    <td>{{$user['email']}}</td>
                                    <td>{{$user['gender']}}</td>
                                    <td>{{$user['address']}}</td>
                                    <td>{{$user['dob']}}</td>
                                    <td>{{$user['contact']}}</td>
                                    <td>{{$user['blood']}}</td>
                                    <td>{{$user['status']}}</td>
                                </tr>
                              @endforeach
     
      </tbody>
    </table>

    </div>
    
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="../../assets/images/logo.png" alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>  
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Campus</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Acedemic</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Our Interns</a></li>
                <li><a href="#">Our Leadership</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Human Resources</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Courses</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Math</a></li>
                  <li><a href="#">Science &amp; Engineering</a></li>
                  <li><a href="#">Arts &amp; Humanities</a></li>
                  <li><a href="#">Economics &amp; Finance</a></li>
                  <li><a href="#">Business Administration</a></li>
                  <li><a href="#">Computer Science</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">Share Your Story</a></li>
                  <li><a href="#">Our Supporters</a></li>
              </ul>
          </div>
        </div>

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
  <script type="text/javascript">
      //newMethod
      $(document).on('keyup', '#search', function(){
        var query = $(this).val();
        //console.log(query);
        $.ajax({
          method:'POST',
          url:"{{ route('teacher.studentList') }}",
          dataType:'json',
          data:{
            query:query,
          },
          success: function(res){
            console.log(res);
            var tableRow ='';
            $('#temporary-table').html('');
            $.each(res,function(index,value){
              console.log(index);
              console.log("Break");
            
          
  tableRow ='<tr><td>'+value.id+'</td><td>'+value.name+'</td><td>'+value.email+'</td><td>'+value.gender+'</td><td>'+value.address+'</td><td>'+value.dob+'</td><td>'+value.contact+'</td><td>'+value.blood+'</td><td>'+value.status+'</td><td>';
            
              $('#temporary-table').append(tableRow);
             
            });
          }
        });
        
        });

      
</script>


</body>

</html>
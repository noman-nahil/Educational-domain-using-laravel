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
                  <a href="/home" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="/home/adduser" class="nav-link text-left">Add New User</a>
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
              <h2 class="mb-0">User Information</h2>
             <p></p>
            </div>
          </div>
        </div>
      </div> 


    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-8">
                  <form>
                    <div class="row">

                        <div class="col-md-8 form-group">
                            <input type="text" name="searchId" id="searchId" class="form-control form-control-lg">
                        </div  class="col-md-4 form-group">
                        <div>
                            <input type="button" id="ajaxSearch" value="Search" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                    <div id="printArea">
                    
                    <div class="row">

                      
                      <div class="col-md-12 form-group">
                          <label for="id">ID:</label>
                          <input type="text" id="id" name="id" value="" class="form-control form-control-lg" disabled> 
                      </div>
                    
                    <div class="col-md-12 form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="" class="form-control form-control-lg"> 
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" value="" class="form-control form-control-lg"> 
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="gender">Gender</label>
                      <select id="gender" name="gender" class="form-control form-control-lg">
                          <option></option>
                      </select>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="dob">Birthday</label>
                        <input type="text" id="dob" name="dob" value="" class="form-control form-control-lg"> 
                    </div>
                     <div class="col-md-12 form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" value="" class="form-control form-control-lg"> 
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="contact">Contact</label>
                        <input type="text" id="contact" name="contact" value="" class="form-control form-control-lg"> 
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="blood">Blood Group</label>
                        <select id="blood" name="blood" class="form-control form-control-lg">
                          <option></option>
                      </select>
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="type">Type</label>
                      <input type="text" id="type" name="type" value="" class="form-control form-control-lg" disabled> 
                  </div>
                  <div class="col-md-12 form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" class="form-control form-control-lg">
                        <option></option>
                    </select>
                  </div>
                </div>

              </div>


                <div class="row">
                  <div class="col-md-4 form-group">
                      <span></span>
                  </div>
                  <div class="col-md-6 form-group">
                    <span id="msg"></span>
                </div>
                </div>
                    <div class="row">
                          <div class="col-sm-3">
                              <input type="button" value="Update" id="update" name="update" class="btn btn-primary btn-lg px-5">
                          </div>
                          <div id="editor"></div>
                          <div class="col-sm-3">
                            <input type="button" value="Print" id="print" name="print" class="btn btn-secondary btn-lg px-5">
                          </div>
                    </div>
                </div>
              </form>
            </div>
        </div>
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
  <script>

     $(document).ready(function(){
       //var search = 
      
      $("#print").click(function(){
        $("#msg").text('Printing Success');
            $("#msg").css("color", "green");
        var doc = new jsPDF();
              var id=  $("#id").val();
              var name= $("#name").val();
              var email=  $("#email").val();
              var gender=$("#gender").val();
              var dob=$("#dob").val();
              var address= $("#address").val();
              var contact= $("#contact").val();
              var blood= $("#blood").val();
              var status=  $("#status").val();
              doc.setFontSize(25);
              doc.text(60, 30, 'User Infromation')
              doc.setFontSize(10);
              doc.setFont('times')
              doc.text(160, 35, 'Print Time:')
              doc.setFontSize(16);
              doc.text(30, 40, 'ID:'+id);
              doc.text(30, 50, 'Name:'+name);
              doc.text(30, 60, 'Email:'+email);
              doc.text(30, 70, 'Gender:'+gender);
              doc.text(30, 80, 'Date of birth:'+dob);
              doc.text(30, 90, 'Address:'+address);
              doc.text(30, 100, 'Contact:'+contact);
              doc.text(30, 110, 'Blood Group:'+blood);
              doc.text(30, 120, 'Status:'+status);
              
                doc.save(id+'.pdf');

      });

      });

</script>

</body>

</html>
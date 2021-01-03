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
            <a href="/admin/password" class="small mr-3"><span class=""></span>Change Password</a>
            <a href="/logout" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Logout</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container">
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
                    <a href="/home/teacherlist" class="nav-link text-left">Teacher List</a>
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
                <p>Welcome,</p>
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
            </div>
          </div>
        </div>
      </div> 


    <div class="site-section">
        <div class="listboard">
            <div class="row justify-content-center">
                <div class="col-12">
                  <div class="row">
                         
                  </div> 
                  <form>
                    <div class="row">
                        <div class="col-md-4 offset-md-2 form-group">
                            <input type="text" name="searchId" id="searchId" class="form-control form-control-lg">
                        </div>
                        <div>
                            <input type="button" id="ajaxSearch" value="Search" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-3 offset-md-4">
                      <h5>{{session('upmsg')}}</h5>
                      </div>
                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Blood</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($users as $user)
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
                                    <td><a href="{{route('admin.user',$user['id'])}}">Edit</a>&nbsp<a href="{{route('admin.delete',$user['id'])}}">Delete</a></td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              </form>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
  <script>
    $(document).ready(function(){
      var doc = new jsPDF();
        var specialElementHandlers = {
        '#editor': function (element, renderer) {
        return true;
      }
      };
        $("#ajaxSearch").click((e) => {
            e.preventDefault();
            var search = $("#searchId").val();
            $.ajax({
                url: "/home/user",
                data: { search: search },
                method: "post",
                contentType: "application/x-www-form-urlencoded",
                success: function(data){
                    var results = data.results;
                      $("#searchId").val('');
                      $("#msg").text('');
                       $("#id").val(results.id);
                      $("#name").val(results.name);
                      $("#email").val(results.email);
                     // $("#gender").val(results.gender);
                      $("#dob").val(results.dob);
                      $("#address").val(results.address);
                      $("#contact").val(results.contact);
                      //$("#blood").val(results.blood);
                      $("#type").val(results.type);
                      //$("#bloodtest").val(results.blood);
                      var dropdown = $('#gender');
                      dropdown.empty();
                      dropdown.prop('selectedIndex', 0);
                      var options = ['Male','Female'];
                      for(var i = 0; i< options.length; i++){
                        if(options[i]===results.gender){
                          dropdown.append($('<option selected="true" ></option>').attr('value', options[i]).text(options[i]));
                        }
                        else{
                          dropdown.append($('<option></option>').attr('value', options[i]).text(options[i]));
                        }
                      }
                      var bloodgrp = $('#blood');
                      bloodgrp.empty();
                      bloodgrp.prop('selectedIndex', 0);
                      var blood = ['A+','A-','B+','B-','AB+','AB-','O+','O-'];
                      for(var i = 0; i< blood.length; i++){
                        if(blood[i]===results.blood){
                          bloodgrp.append($('<option selected="true" ></option>').attr('value', blood[i]).text(blood[i]));
                        }
                        else{
                          bloodgrp.append($('<option></option>').attr('value', blood[i]).text(blood[i]));
                        }
                      }
                      var status = $('#status');
                      status.empty();
                      status.prop('selectedIndex', 0);
                      var statusOptions = ['Active','Deactive'];
                      for(var i = 0; i< statusOptions.length; i++){
                        if(statusOptions[i]===results.status){
                          status.append($('<option selected="true" ></option>').attr('value', statusOptions[i]).text(statusOptions[i]));
                        }
                        else{
                          status.append($('<option></option>').attr('value', statusOptions[i]).text(statusOptions[i]));
                        }
                      }
                      
                      /*
                      if(results.gender==='Male'){
                        dropdown.append($('<option selected="true" ></option>').attr('value', 'Male').text('Male'));
                        dropdown.append($('<option ></option>').attr('value', 'Female').text('Female'));
                      }
                      else{
                        dropdown.append($('<option ></option>').attr('value', 'Male').text('Male'));
                        dropdown.append($('<option selected="true"></option>').attr('value', 'Female').text('Female'));
                      }*/
                     
                      //dropdown.val($('<option></option>').attr('value', results.blood).text(results.blood));
                     // dropdown.val(results.blood);
                }, error: function(err) {
                    alert(err);
                }
            });
        });
        $("#clear").click((e) => {
          //alert("clear");
          $("#searchId").val('');
          $("#id").val('');
          $("#name").val('');
          $("#email").val('');
          $("#gender").val('');
          $("#dob").val('');
          $("#address").val('');
          $("#contact").val('');
          $("#blood").val('');
          $("#type").val('');
          $("#status").val('');
          $("#msg").text('');
        });
        
        $("#print").click(function(){
          if($("#name").val()==='' || $("#email").val()==='' || $("#gender").val()==='' || $("#dob").val()==='' || $("#address").val()==='' || $("#contact").val()==='' && $("#blood").val()==='' || $("#status").val()===''){
            //alert('Can not print cz name is empty');
            $("#msg").text('Failed');
            $("#msg").css("color", "red");
          }
          else{
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
            /*doc.fromHTML($('#printArea').html(), 15, 15, {
                'width': 170,
            'elementHandlers': specialElementHandlers
           });*/
             //doc.save('sample-file.pdf');
          }
        });
        $("#update").click((e) => {
          if($("#name").val()==='' || $("#email").val()==='' || $("#gender").val()==='' || $("#dob").val()==='' || $("#address").val()==='' || $("#contact").val()==='' && $("#blood").val()==='' || $("#status").val()===''){
            $("#msg").text('Failed');
            $("#msg").css("color", "red");
          }
          else{
            e.preventDefault();
//var id= $("#id").val();
      $.ajax({
          url: "/admin/user",
          type: "post",
          data: {
              id:  $("#id").val(),
              name:  $("#name").val(),
              email:  $("#email").val(),
              gender:  $("#gender").val(),
              dob:  $("#dob").val(),
              address:  $("#address").val(),
              contact:  $("#contact").val(),
              blood:  $("#blood").val(),
              status:  $("#status").val(),
          },
          success: function (results) {
              //$('#output').html(data.responseText);
             
          }
      });
      $("#msg").text('update Successfully');
          $("#msg").css("color", "green");
          $("#id").val('');
          $("#name").val('');
          $("#email").val('');
          $("#gender").val('');
          $("#dob").val('');
          $("#address").val('');
          $("#contact").val('');
          $("#blood").val('');
          $("#type").val('');
          $("#status").val('');
      //alert(payload);
          }
       
        });
        $("#delete").click((e) => {
          if($("#name").val()==='' || $("#email").val()==='' || $("#gender").val()==='' || $("#dob").val()==='' || $("#address").val()==='' || $("#contact").val()==='' && $("#blood").val()==='' || $("#status").val()===''){
            $("#msg").text('Failed');
            $("#msg").css("color", "red");
          }
          else{
            var proceed = confirm("Are you sure you want to proceed?");
          if (proceed) {
          //proceed
                } else {
          //don't proceed
        }
            //alert("Are you sure?");
            
            e.preventDefault();
//var id= $("#id").val();
      $.ajax({
          url: "/admin/user",
          type: "post",
          data: {
              deleteId:  $("#id").val(),
          },
          success: function (results) {
              //$('#output').html(data.responseText);
             
          }
      });
      $("#msg").text('Delete Successfully');
          $("#msg").css("color", "green");
          $("#id").val('');
          $("#name").val('');
          $("#email").val('');
          $("#gender").val('');
          $("#dob").val('');
          $("#address").val('');
          $("#contact").val('');
          $("#blood").val('');
          $("#type").val('');
          $("#status").val('');
      //alert(payload);
          }
          //alert("delete");
        });
       
    });
</script>

</body>

</html>
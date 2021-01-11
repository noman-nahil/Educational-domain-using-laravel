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

  <link rel="stylesheet" href="../../assets/css/aos.css">
  <link href="../../assets/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="col-md-12 form-group">
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Course Id</th>
              <th scope="col">Course Name</th>
              <th scope="col">Teacher Name</th>
              <th scope="col">Class Time</th>
            
            </tr>
          </thead>
          <tbody>
            @for($i=0; $i < count($data); $i++)
               <td></td>
              <td>{{$data[$i]['id']}}</td>
              <td>{{$data[$i]['courseName']}}</td>
              <td>{{$data[$i]['teacherName']}}</td>
              <td>{{$data[$i]['timing']}}</td>
            </tr>
              @endfor
        </tbody>
        </table>
      </div>
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <script src="../../assets/js/main.js"></script>
</body>
</html>
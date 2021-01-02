<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade Report</title>
</head>
<body>
    <div class="site-section">
        <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-5">
                <h1 class="font weight bold">STUDENT INFO</h1>
            </div>
            <div class="col-md-12 form-group">
              <table class="table table-hover">
                <thead class="thead-dark"> 
                <tr>
                    <th scope="col">Student Username</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr> 
                    <td>{{$username}}</td>
                    <td>{{$name}}</td>
                    <td>{{$email}}</td>
                  </tr>
              </tbody>
              </table>
                      </div> 

         <div class="col-md-5">
            <h1 class="font weight bold">All Courses Grade</h1>
        </div>
        <div class="col-md-12 form-group">
            <table class="table table-hover">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Course Id</th>
                  <th scope="col">Course Name</th>
                  <th scope="col">Grade</th>
                </tr>
              </thead>
              @foreach ($data as $i)
              <tbody>
                <tr>
                  <td></td>
                  <td>{{$i->id}}</td>
                  <td>{{$i->courseName}}</td>
                  <td>{{$i->grade}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
                    </div>
                    </div>
                </div>
            </div>
</body>
</html>
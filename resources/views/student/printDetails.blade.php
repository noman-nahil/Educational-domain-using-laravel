<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
 <tr>
          <th >Course Id</th>
       
          <th >Course Name </th>
     
          <th >Course Teacher Name</th>
       
          <th >Grade</th>
   
          <th>Status</th>
        </tr>
        @foreach($list as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->courseName }}</td>
                                    <td>{{$user->teacherName}}</td>
                                    <td>{{$user->grade}}</td>
                                    <td>{{$user->status}}</td>
                  
                                </tr>
                              @endforeach


	</table>
</body>
</html>
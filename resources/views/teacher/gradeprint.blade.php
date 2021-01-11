<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border='1'>
 <tr>
          <th>Student id</th>
          <th>Midterm</th>
          <th>Finalterm</th>
          <th>Total</th>

 </tr>
        @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->sid }}</td>
                                    <td>{{ $user->Midterm }}</td>
                                    <td>{{$user->Finalterm}}</td>
                                    <td>{{$user->Total}}</td>
                                </tr>
                              @endforeach


	</table>
</body>
</html>
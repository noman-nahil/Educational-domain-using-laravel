<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
 <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Address</th>
          <th>DOB</th>
          <th>Contact</th>
          <th>Blood</th>
          <th>Status</th>
        </tr>
        @foreach($list as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->dob}}</td>
                                    <td>{{$user->contact}}</td>
                                    <td>{{$user->blood}}</td>
                                    <td>{{$user->status}}</td>
                                </tr>
                              @endforeach


	</table>
</body>
</html>
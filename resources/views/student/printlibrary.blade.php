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
     
          <th >Author Name</th>
       
          <th >Category</th>
        </tr>
        @foreach($list as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->bookName }}</td>
                                    <td>{{$user->author}}</td>
                                    <td>{{$user->category}}</td>
                                </tr>
                              @endforeach


	</table>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table border="1px">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Image</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->contact}}</td>
            <td><img src="{{asset($student->img)}}" height="60px" width="60px" alt=""></td>
            <td><a href="{{url('delete/'.$student->id)}}">Delete</a> </td>
        </tr>
    @endforeach
</table>
<a href="{{url('/create')}}"><button>Create</button> </a>

</body>
</html>

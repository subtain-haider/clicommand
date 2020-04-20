<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<a href="{{ route('student.create') }}">Add New Student</a>

<h1>Data of All Students</h1>

<?php
//foreach ($data as $abc) {
//    echo $abc->name. "<br>";
//}
//?>

@foreach($students as $student)
<ul>
    <li>{{ $student->name }}</li>
    <li>{{ $student->father_name }}</li>
    <li>{{ $student->cnic }}</li>
    <li>{{ $student->email }}</li>
</ul>
    @endforeach
</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>

@if($message = Session::get('success'))
    <p>{{ $message }}</p>
@endif

<h1>Add New student</h1>

<form action="/student" method="POST">
    @csrf
    Student Name: <input type="text" name="name"><br>
    Father Name: <input type="text" name="father_name"><br>
    Email: <input type="text" name="email"><br>
    Password: <input type="text" name="password"><br>
    <input type="submit">
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <hr>
    @foreach ($students as $stu)
        {{$stu->id}}
        {{$stu->name}}
        {{$stu->city}}
        <br>        
    @endforeach
    {{$students->links()}}
</body>
</html>
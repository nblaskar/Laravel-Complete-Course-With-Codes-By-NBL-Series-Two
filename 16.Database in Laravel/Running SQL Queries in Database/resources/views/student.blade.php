<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
    {{-- Display Retrieved data from Database --}}
    @foreach ($students as $std)
        {{$std->id}}
        {{$std->name}}
        {{$std->email}}
        {{$std->city}}
         <br>
    @endforeach
    
</body>
</html>
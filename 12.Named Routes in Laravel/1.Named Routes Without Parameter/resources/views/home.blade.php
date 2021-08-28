<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    <hr>
    {{-- Navigation Without Named Route --}}
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
    <hr>

    {{-- Navigation With Named Route --}}
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('aboutme')}}">About</a></li>
        <li><a href="{{route('contactus')}}">Contact</a></li>
    </ul>
    
</body>
</html>
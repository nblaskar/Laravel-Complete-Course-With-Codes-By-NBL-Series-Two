<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Post Page</h1>
    <hr>
    {{-- Navigation Without Named Route --}}
    <ul>
        <li><a href="/">Home</a></li>
        {{-- <li><a href="/post">Post</a></li> --}}
    </ul>
    <hr>
    {{-- Navigation With Named Route --}}
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        {{-- 1)Provide Data to Named Route --}}
        <li><a href="{{route('manypost', ['category'=>'mobile'])}}">Post</a></li>

        
        {{-- 2)Additional Data Will be Considered as Query Data --}}
        <li><a href="{{route('manypost', ['category'=>'mobile', 'n'=>5])}}">Post wth Extra Data</a></li>
    </ul>
    
</body>
</html>
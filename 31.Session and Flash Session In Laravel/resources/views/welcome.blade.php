<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome Page</h1>
    <h2>Session Data:</h2>
    <h3>{{$name}}</h3>
    <h3>{{$roll}}</h3>
    <h3>{{$city}}</h3>
    <h3>{{$price}}</h3>
    @php
    print_r($alldata);        
    @endphp
    <br>
    <h3>{{$status}}</h3>
    <h3>{{session('status')}}</h3>

    
</body>
</html>
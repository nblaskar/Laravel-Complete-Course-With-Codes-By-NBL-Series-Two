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
<hr>
{{-- ##################(1)Include Directive Without Controller################## --}}
{{-- a)Include Sub Views --}}
@include('contact')
<hr>


{{-- b)Access Views incomming Data in Parent View  --}}
<h2>Access Data in Welcome Parent Page:- {{$name}}</h2>
<hr>


{{-- c)Pass Data in views from Parent to Child View --}}
<h2>Pass Data From Parent View to Child View</h2>
@include('about', ['pincode'=>'788119'])
    
</body>
</html>
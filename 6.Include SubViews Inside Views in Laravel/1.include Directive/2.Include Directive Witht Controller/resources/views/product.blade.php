<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- #################(2)Include Directive With Controller###################### --}}
    <h1>Product Parent Page</h1>
    <hr>

    {{-- a)Inclide Sub Views --}}
    <p>Include mobile child view here in parent page</p>
    @include('mobile')
    <hr>

    {{-- b)Access Views Incomming Data in Parent Page --}}
    <h1>Access incomming view Data in Product Parent Page:- {{$wn}}</h1>
    <hr>


    {{-- c)Pass Data in View from Parent to Child View --}}
    <p>include price child view and also pass data here in parent page</p>
    @include('price',['total'=>50]);

    
</body>
</html>
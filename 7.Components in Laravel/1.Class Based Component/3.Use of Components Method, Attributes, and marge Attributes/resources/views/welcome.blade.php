<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .myclass{
            color: green;
        }
       
    </style>
</head>
<body>
    <h1>Home Page</h1>
    <hr>

    {{-- Simple Php Codes as expression --}}
    @php
        $desc = 'Its Card Description';
    @endphp

    {{-- Pass Data and attrbute to a Component --}}
    <x-card title='Card Title 1' sub-title='Card Sub Title 1' :description=$desc class='myclass'/>
   
   {{-- Pass Different Data to the Same Component --}}
    <x-card title='Card Title 2' sub-title='Card Sub Title 2' :description=$desc/>


    {{-- Now You Can not Use Empty Component --}}
    {{-- <x-card/> --}}


    
</body>
</html>
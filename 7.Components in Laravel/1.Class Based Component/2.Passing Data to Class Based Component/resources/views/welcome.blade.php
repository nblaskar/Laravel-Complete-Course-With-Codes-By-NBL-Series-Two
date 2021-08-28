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

    {{-- Simple Php Codes as expression --}}
    @php
        $desc = ' This is Card Description'
    @endphp

    {{-- Pass Data to a Component --}}
    <x-card title='Card Title 1' sub-title='Card Sub Title 1' :description=$desc/>
   
   {{-- Pass Different Data to the Same Component --}}
    <x-card title='Card Title 2' sub-title='Card Sub Title 2' :description=$desc/>


    {{-- Now You Can not Import Empty Component Now --}}
    {{-- <x-card/> --}}


    
</body>
</html>
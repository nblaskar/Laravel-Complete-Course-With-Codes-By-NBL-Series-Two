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

    {{-- Component with Slots Feature --}}
    <x-alert>

        {{-- 1)Use of Unnamed Slots of Components --}}
        <span>I am Alert Span in Unnamed Slots</span>

        {{-- 2)Use of Named Slots of Components --}}
        <x-slot name='title'>I am Alert Title in named slots</x-slot>
        

    </x-alert>
    <hr>
    
</body>
</html>
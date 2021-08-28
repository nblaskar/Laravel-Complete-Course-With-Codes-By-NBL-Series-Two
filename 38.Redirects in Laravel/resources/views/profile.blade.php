<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Profile Page</h1>
    <hr>
    {{-- To print Flash Session data as --}}
    @if (session('status'))
        {{session('status')}}        
    @endif
    
</body>
</html>
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
    {{-- 1)Connect Images from public Folder to Display --}}
    <img src="images/Profile.jpeg" alt="">   
    <hr>

                {{-- OR --}}
    
    {{-- 2)You can Also Connect Images by asset() Method --}}
    <img src={{asset("images/Profile.jpeg")}} alt="">  
    <hr> 
    {{-- It is best Method --}}

                {{-- OR --}}

    {{-- 2)You can Also Connect Images by url() Method --}}
    <img src={{url("images/Profile.jpeg")}} alt="">  
    
    {{-- You can place the scr data inside double quotes also --}}
</body>
</html>
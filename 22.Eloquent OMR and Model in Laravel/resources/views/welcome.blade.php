<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Display Data from Database by Model --}}
    {{-- 1)Display Array Object Data --}}
    @foreach ($students as $stu)
        {{$stu->id}}
        {{$stu->name}}
        {{$stu->email}}
        {{$stu->city}}
        {{$stu->marks}}
        <br>        
    @endforeach


    {{-- 2)Display Single Object Data --}}
        {{-- {{$students->id}}
        {{$students->name}}
        {{$students->email}}
        {{$students->city}}
        {{$students->marks}} --}}

    {{-- 2)Display Single Data --}}
        {{-- {{$students}} --}}

    
</body>
</html>
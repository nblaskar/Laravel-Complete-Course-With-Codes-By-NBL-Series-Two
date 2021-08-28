<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>
</head>
<body>
    {{-- Display Retrieved data from Database --}}
    {{-- 1)For Multiple Object as Arraty --}}
    @foreach ($students as $stu)
        {{$stu->id}}
        {{$stu->name}}
        {{$stu->email}}
        {{$stu->city}}
        {{$stu->marks}}
        {{$stu->pass_date}}
        <br>
    @endforeach


    {{-- 2)For Single Object as Arraty --}}
        {{-- {{$students->id}}
        {{$students->name}}
        {{$students->email}}
        {{$students->city}}
        {{$students->marks}}
        {{$students->pass_date}} --}}

    {{-- 3)For Single Value --}}
        {{-- {{$students}} --}}

    {{-- 4)View Colums Data as  --}}
    {{-- @foreach ($students as $stu)
        {{$stu}}
        <br>
    @endforeach --}}



    
</body>
</html>
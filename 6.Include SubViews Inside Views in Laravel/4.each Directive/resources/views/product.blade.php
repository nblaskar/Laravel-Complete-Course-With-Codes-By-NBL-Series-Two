<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product Parent Page</h1>
    <hr>
{{-- 1)Without each Directive --}}
    @foreach ($students as $stu)
        @include('students')  
    @endforeach
    <hr>

    {{-- 2)with each Directive --}}
    @each('students', $students, 'stu')
    <hr>


    {{-- 3)each Directive with fourth parameter --}}
    @each('students', $es, 'stu','nostudent')


    
</body>
</html>
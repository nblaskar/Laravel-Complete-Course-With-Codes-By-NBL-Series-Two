<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>
  </head>
<body>
    {{-- Display Retrieved data from Database with pagination --}}
    @foreach ($students as $stu)
        {{$stu->id}}
        {{$stu->name}}
        {{$stu->email}}
        {{$stu->city}}
        {{$stu->marks}}
        {{$stu->pass_date}}
        <br>
    @endforeach

    {{-- Display Pagination Links --}}
    {{$students->links()}}

</body>
</html>
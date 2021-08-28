<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>
    {{-- Bootstrap Css File --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    {{-- {{$students->links()}} --}}


    {{-- Display Pagination Links with Bootstrap --}}
    {{$students->links('pagination::Bootstrap-4')}}

    {{-- Use of Paginator Extra methods Provided by Laravel --}}
    {{$students->count()}}

</body>
</html>
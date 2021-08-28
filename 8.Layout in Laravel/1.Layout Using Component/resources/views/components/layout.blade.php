<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Apply CSS here, which applicable for all datas inside layout component --}}
   <link rel="stylesheet" href="">
   {{-- Layout To print Your page title  --}}
    <title>{{$title}}</title>
</head>
<body>
    {{-- Layout To print Your Page Heding --}}
    {{ $pageheading}}
    {{-- Layout To Print Your Page Contents --}}
    {{$slot}}
</body>
</html>
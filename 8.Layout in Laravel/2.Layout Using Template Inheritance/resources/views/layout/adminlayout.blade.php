<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- 1)Apply css here, which will be applicable for all datas inside adminlayout view --}}
    <link rel="stylesheet" href="">
    {{-- 2)Layout To Receive and Print your Page's title--}}
    <title>@yield('title')</title>
</head>
<body>
    {{-- 3)Layout To Receive and Print your Page's Heading--}}
    @yield('page-heading')
    

    {{-- 4)Layout To Receive and Print your Page's Banner Content--}}
    @yield('banner')
    <hr>


    {{-- 5)Layout To Receive and Print your Page's Main Content--}}
    @yield('main-content')
    <hr>
    

    {{-- 6)Print Default Text From Layout --}}
    <h4>This is Default Text From Layout</h4>
    <hr>

    {{-- 7)Provide, Pass and print default data section from layout --}}
    @section('default-content')
        <h4>This is Default Text From Layout by @sections and @shows</h4>
    @show {{-- print default data of section layout provider here by @section+@show directive --}}
    <hr>


  



</body>
</html>
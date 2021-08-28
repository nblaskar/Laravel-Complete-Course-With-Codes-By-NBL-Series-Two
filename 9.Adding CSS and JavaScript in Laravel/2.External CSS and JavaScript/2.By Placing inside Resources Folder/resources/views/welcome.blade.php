<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- 1)Link the Compiled Public Folder CSS File Here --}}
    <link rel="stylesheet" href="css/app.css">

                    {{-- OR --}}

    {{-- 2)The best Process to link by asset() method --}}
    <link rel="stylesheet" href={{asset('css/style.css')}} >

                    {{-- OR --}}

    {{-- 3)You can also link by url() method --}}
    <link rel="stylesheet" href={{url('css/style.css')}} >
    {{-- You can also place these href data inside double quotes --}}
</head>
<body>
    <h1>Hello Laravel h1</h1>
    <hr>
    <h2>Hello Laravel h2</h2>
    <hr>

    {{-- 1)Link the Compiled Public Folder JS File Here --}}
    <script src="js/app.js"></script>

                {{-- OR --}}

    {{-- 2)The best Process to link by asset() method --}}
    <script src={{asset('js/myscript.js')}}></script>

                {{-- OR --}}

    {{-- 3)You can also link by url() method --}}
    <script src={{url('js/myscript.js')}}></script>
    {{-- You can also place these src data inside double quotes --}}
</body>
</html>
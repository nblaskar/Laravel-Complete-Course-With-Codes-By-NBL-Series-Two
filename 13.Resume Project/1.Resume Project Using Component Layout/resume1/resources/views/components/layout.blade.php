<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Google Font Link --}}
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    {{-- Link Bootstrap CSS File --}}
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">


    {{-- Link FontAwesome CSS File --}}
    <link rel="stylesheet" href="{{asset("css/all.css")}}">

    {{-- Link Our Custom CSS File --}}
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <title>{{ $title }}</title>
</head>
<body>
    {{-- #################### Layout Start ################### --}}
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-sm-2">
                @include('include.sidebar')
            </div>
            <div class="col-sm-10 ">
                {{ $ourcontents }}
            </div>
        </div>
    </div>


    {{-- #################### Layout End ##################### --}}      
    {{-- Link Bootstrap JS File --}}
    <script src="{{asset("js/bootstrap.bundle.js")}}"></script>

    {{-- Link FontAwesome JS File --}}
    <script src="{{asset("js/all.js")}}"></script>

    {{-- Link Our Custom JS File --}}
    <script src="{{asset("js/myscript.js")}}"></script>
</body>
</html>
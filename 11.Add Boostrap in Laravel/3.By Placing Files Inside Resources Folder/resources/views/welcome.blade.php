<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Link Boostsrap Compiled CSS Files From Public Folder here --}}
    {{-- Process-1 --}}
    <link rel="stylesheet" href="css/style.css">

    {{-- OR --}}
    
    {{-- Process-2 --}}
    <link rel="stylesheet" href={{asset("css/app.css")}}>

    {{-- OR --}}
    
    {{-- Process-3 --}}
    <link rel="stylesheet" href={{url("css/app.css")}}>
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    <hr>
    {{-- Buttons Design by Bootstrap --}}
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
    <hr>
    {{-- Dropdown Buttons Design By Bootstrap  --}}
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
{{-- Link Boostsrap Compiled JS Files From Public Folder here --}}
{{-- Process-1 --}}
<script src="js/myscript.js"></script>

    {{-- OR --}}
    
{{-- Process-2 --}}
<script src={{asset("js/app.js")}}></script>

    {{-- OR --}}
    
{{-- Process-3 --}}
{{-- <script src={{url("js/app.js")}}></script> --}}

</body>
</html>
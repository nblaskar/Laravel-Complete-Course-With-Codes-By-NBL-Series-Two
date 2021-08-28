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
{{-- 1)Use of includeWhen Directive --}}
{{-- it works when boolean is True --}}
@includeWhen($uT1, 'mobile', ['total' =>45])
<hr>


{{-- 2)Use of includeUnless Directive --}}
{{-- it works when boolean is false --}}
@includeUnless($uT2, 'mobile', ['total' => 55])
<hr>

    
</body>
</html>
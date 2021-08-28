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
{{-- a)when sub view is exist --}}
@includeIf('mobile')
<hr>

            {{-- OR --}}

{{-- b)when sub view is not exist --}}
@includeIf('mobile1')
<hr>

    
</body>
</html>
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
@once
    @include('students')
    <p>it will be evalueated once per rendering cycle</p>
@endonce

    
</body>
</html>
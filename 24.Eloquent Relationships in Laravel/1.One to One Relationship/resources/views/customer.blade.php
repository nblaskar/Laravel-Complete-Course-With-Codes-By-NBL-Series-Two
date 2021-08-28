<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One to One Relationship</title>
</head>
<body>
    {{$customer}}
    <br>
    <h1>Customer ID: {{$customer->id}}</h1>
    <h1>Customer Name: {{$customer->name}}</h1>
    <h1>Customer Email: {{$customer->email}}</h1>
    
</body>
</html>
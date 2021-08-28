<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- 2)Use the Translated Strings with keys for Localization --}}
    <h1>{{__('home.page')}}</h1>
    <hr>
    <ul>
        <li>{{__('home.home')}}</li>
        <li>{{__('home.about')}}</li>
        <li>{{__('home.contact')}}</li>
    </ul>
    <h2>{{__('home.welcome', ['name'=>'Sonam'])}}</h2>
    
</body>
</html>
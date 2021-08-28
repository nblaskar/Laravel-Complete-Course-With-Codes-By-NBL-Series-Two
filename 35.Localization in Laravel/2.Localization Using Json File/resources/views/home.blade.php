
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
    <h1>{{__('page')}}</h1>
    <hr>
    <ul>
        <li>{{__('home')}}</li>
        <li>{{__('about')}}</li>
        <li>{{__('contact')}}</li>
    </ul>
    <h2>{{__('welcome', ['name'=>'Sonam'])}}</h2>
    
</body>
</html>

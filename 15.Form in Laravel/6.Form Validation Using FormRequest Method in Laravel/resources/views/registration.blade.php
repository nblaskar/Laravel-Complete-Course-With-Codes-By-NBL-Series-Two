<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    {{-- To Displaying Validation Errors --}}
    @if ($errors->any())
        {{$errors}}        
    @endif
    {{-- Form --}}
    <form action="" method="post">
        @csrf
        Name: <input type="text" name="name" id="name" value="{{ old('name')}}"><br><br>
        Email: <input type="email" name="email" id="email" value="{{ old('email')}}"><br><br>
        Password: <input type="password" name="password" id="password" value="{{ old('password')}}"><br><br>
        <input type="submit" value="Submit">
    </form>
    <hr>
    {{-- To Display Submited Forms Data --}}
    @if (isset($data))
        @foreach ($data as $item)
            <p>{{$item}} </p>       
        @endforeach        
    @endif
 
    
</body>
</html>
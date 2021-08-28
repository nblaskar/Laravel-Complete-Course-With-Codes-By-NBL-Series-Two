<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    {{-- 1)Displaying Validation Errors --}}
    {{-- @if ($errors->any())
        {{$errors}}        
    @endif --}}

    {{-- 2)Displaying Error Messages --}}
    {{-- a)Retriving All Error Messages For All Fields --}}
     {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $message )
                <li>{{$message}}</li>         
            @endforeach  
        </ul>            
    @endif --}}

    {{-- b)Retriving All Error Messages For A Fields --}}
    {{-- You Can put this code in the below of respective fields in form --}}
     {{-- @if ($errors->any())
            @foreach ($errors->get('email') as $message )
                <p>{{$message}}</p>         
            @endforeach            
    @endif --}}

    {{-- c)Retriving The First Error Message For A Field --}}
    {{-- @if ($errors->any())
        {{$errors->first('email')}}   
    @endif --}}

    {{-- d)Determining If Error Message Exist For A field  --}}
    {{-- @if ($errors->any())
        @if ($errors->has('email'))
            <p>Yes! Email Has Errors</p>
        @endif   
    @endif --}}

    {{-- 3)Error Directive --}}
    {{-- You Can put this code in the below of respective fields in form --}}
        <form action="" method="post">
            @csrf
            Name: <input type="text" name="name" id="name" value="{{ old('name')}}"><br>
            @error('name')
                <span style="color: red;">{{$message}}</span><br>            
            @enderror
            Email: <input type="email" name="email" id="email" value="{{ old('email')}}"><br>
            @error('email')
            <span style="color: red;">{{$message}}</span><br>                 
            @enderror
            Password: <input type="password" name="password" id="password" value="{{ old('password')}}"><br><br>
            @error('password')
            <span style="color: red;">{{$message}}</span><br>                     
            @enderror
            <input type="submit" value="Submit">
        </form>
  
        {{-- Our Form --}}
    {{-- <form action="" method="post">
        @csrf
        Name: <input type="text" name="name" id="name" value="{{ old('name')}}"><br><br>
        Email: <input type="email" name="email" id="email" value="{{ old('email')}}"><br><br>
        Password: <input type="password" name="password" id="password" value="{{ old('password')}}"><br><br>
        <input type="submit" value="Submit">
    </form> --}}
    <hr>
    {{-- To Display Submited Forms Data --}}
    @if (isset($data))
        @foreach ($data as $item)
            <p>{{$item}} </p>       
        @endforeach        
    @endif
 
    
</body>
</html>
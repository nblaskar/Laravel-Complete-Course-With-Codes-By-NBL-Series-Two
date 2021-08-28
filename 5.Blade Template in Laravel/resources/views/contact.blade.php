<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
</head>
<body>
    <h1>Contact Page</h1>
<hr>
{{-- 1)Displaying Data --}}
{{-- <h1>Name: {{$nm}}</h1> --}}

{{-- 2)Calling Functions --}}
{{-- <h2>{{time()}}</h2>
<h2>Time={{time()}} in milisecond</h2>
<h2>SQRT: {{sqrt(49)}}</h2> --}}


{{-- 3)if Directives --}}
{{-- @if($nm == "Nur")
    <h1>Hello {{$nm}}</h1>
@endif --}}


{{-- 4)if else Directives --}}
{{-- @if($nm =='Firdaus')
    <h1>Hello {{$nm}}</h1>
@else
    <h1>Hello Guest</h1>    
@endif --}}

{{-- 5)if elseif else Directive --}}
{{-- @if($nm =='Firdaus')
    <h1>Hello {{$nm}}</h1>
@elseif($nm == 'Nur')
    <h1>Hello {{$nm}}</h1>
@else
    <h1>Hello Guest</h1>    
@endif --}}

 
{{-- 6)Unless Directive --}}
{{-- @unless ($nm == 'Nur')
    <h1>Yes, im Not Nur </h1>    
@endunless --}}


{{-- 7)isset Directive --}}
{{-- @isset($nm)
    <h1>Yes, this variable has a value:-{{$nm}}</h1>    
@endisset --}}


{{-- 8)empty Directive --}}
{{-- @empty($nm)
    <h1>Yes this variable is empty</h1>    
@endempty --}}


{{-- 9)Production Directive --}}
{{-- @production
    <h1>Yes We are in Production Mode</h1>
@endproduction --}}


{{-- 10)Specific Env Directive --}}
{{-- @env('local')
    <h1>Yes We are in Local Environment</h1>
@endenv --}}


{{-- 11)Multiple Specific Env Directive --}}
{{-- @env(['local', 'staging'])
    <h1>Yes We are in Local or Staging Environment</h1>
@endenv --}}


{{-- 12)Switch Directives --}}
{{-- @switch('Admin')
    @case('Follower')
        <h1>i am Follower</h1>        
        @break

    @case('Admin')
        <h1>Yes, i am Admin</h1>        
        @break

    @case('Guest')
        <h1>I am Guest</h1>        
        @break

    @default
        <h1>Default</h1>        
@endswitch --}}


{{-- 13)For Loop Directive --}}
{{-- @for ($i = 0; $i < 5; $i++)
    <h1>{{$i}}</h1>    
@endfor --}}


{{-- 14)ForEach Loop Directive --}}
{{-- @foreach ($nm as $student)
    <h1>{{$student}}</h1>
@endforeach --}}


{{-- 15)ForElse Loop Directive --}}
{{-- @forelse ($nm as $student)
    <h1>{{$student}}</h1>    
@empty
    <h1>Array is Empty</h1>    
@endforelse --}}


{{-- 16)While Loop Directive --}}
{{-- @while (true)
<h1>Hello Run Unlimited</h1>    
@endwhile --}}
{{-- Dont Run it otherwise system will crash


{{-- 17)Break Directive --}}
{{-- @foreach ($nm as $student)    
    @if ($student == 'Sumit' )
    <p>Stoped Loop at Sumit Iteration</p>
        @break       
    @endif
    <h1>{{$student}}</h1>
@endforeach --}}

{{-- 18)Advance Use of Break Directive --}}
{{-- @foreach ($nm as $student)    
    @break($student == 'Sumit')
    <h1>{{$student}}</h1>
@endforeach --}}


{{-- 19)Continue Directive --}}
{{-- @foreach ($nm as $student)
    @if ($student == 'Sumit' )
        <p>Sumnit is Skipped</p>
        @continue      
    @endif
    <h1>{{$student}}</h1>
@endforeach --}}



{{-- 20)Advance Use of Continue Directive--}}
{{-- @foreach ($nm as $student)    
    @continue($student == 'Sumit')
    <h1>{{$student}}</h1>
@endforeach --}}


{{-- 21)Loop Variable Directive --}}
@foreach ($nm as $item)
    <h1>{{$item}}</h1>

    @if ($loop->first)
    <p>This is first Loop</p>        
    @endif    

    @if ($loop->last)
    <p>This is last Loop</p>        
    @endif    
@endforeach












</body>
</html>
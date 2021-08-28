<div>
    {{-- Dsiplay Component's Passed Data into component --}}
    <h2>{{$title}}</h2>
    <h3>{{$subTitle}}</h3>
    <p>{{$description}}</p>

    {{-- Calling Component Method --}}
    <p>{{$addNumber(10)}}</p>
</div>

{{-- Calling Component Attributes --}}
<h1 {{$attributes}}>Hello</h1>

{{-- Merge Attributes or apply multiple attribute value --}}
<h2 {{$attributes->merge(['class'=>'dclass'])}} >Merge Attribute</h2>
<hr>
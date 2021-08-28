{{-- 1)It extends the Layout Template --}}
@extends('layout.adminlayout')

{{-- 2)It Provides and Pass this page's title to the Layout --}}
@section('title', 'Home')

{{-- 3)It Provides and Pass this page's Heading to the Layout --}}
@section('page-heading')
    <h1>Home Page</h1>
    <hr>    
@endsection

{{-- 4)It Provides and Pass this page's Banner Content to the Layout --}}
@section('banner')
    <h2>This is Home Page Banner</h2>    
@endsection

{{-- 5)It Provides and Pass this page's Main Content to the Layout --}}
@section('main-content')
    <h2>This is Home Page Main Content</h2>    
@endsection


{{-- 6)To Override the defalut @section's data for this Page  --}}
@section('default-content')
    <h2>Override the default section's text of layout in Home page</h2>    
@endsection

                



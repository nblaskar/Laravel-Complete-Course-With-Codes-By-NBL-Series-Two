{{-- 1)It extends the Layout Template --}}
@extends('layout.adminlayout')

{{-- 2)It Provides and Pass this page's title to the Layout --}}
@section('title', 'Contact')

{{-- 3)It Provides and Pass this page's Heading to the Layout --}}
@section('page-heading')
    <h1>Contact Page</h1>
    <hr>    
@endsection

{{-- 4)It Provides and Pass this page's Banner Content to the Layout --}}
@section('banner')
    <h2>This is Contact Page Banner</h2>    
@endsection

{{-- 5)It Provides and Pass this page's Main Content to the Layout --}}
@section('main-content')
    <h2>This is Contact Page Main Content</h2>    
@endsection


{{-- 6)To Append the defalut @section's data with some other data of this Page  --}}
@section('default-content')
    @parent
    <h2>Append the default section's text of layout in Contact page by @parents</h2>    
@endsection
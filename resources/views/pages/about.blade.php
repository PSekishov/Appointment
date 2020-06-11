@extends('layouts.defaultApp')

@section('title','About')

@section('content')
    <h1>Page About</h1>
     @guest

     @else
   <p>Download</p>

     @endguest
@endsection

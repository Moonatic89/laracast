@extends('layouts.app')


@section ('page-title', 'products')



@section ('content')
<h1>Products</h1>

@foreach ($pastas as $pasta)
<h2>{{$pasta['titolo']}}</h2>
@endforeach

@endsection
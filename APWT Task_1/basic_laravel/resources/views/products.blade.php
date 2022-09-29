@extends('layouts.app')
@section('content')

    <h1>Our Products</h1>

    @foreach($products as $product)
        <li style="margin: 20px; font-weight: bold;">{{$product}}</li>
    @endforeach

@endsection
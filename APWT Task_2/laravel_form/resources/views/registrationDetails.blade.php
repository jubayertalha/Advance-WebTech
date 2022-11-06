@extends('layouts.app')
@section('content')

    <h1>Registration Successfull</h1>

    <p style="width: 450px; text-align: justify;">
        Name: {{ $name }}<br>
        Email: {{ $email }}<br>
    </p>

@endsection
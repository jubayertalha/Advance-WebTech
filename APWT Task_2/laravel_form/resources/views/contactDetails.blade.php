@extends('layouts.app')
@section('content')

    <h1>Contact Details</h1>

    <p style="width: 450px; text-align: justify;">
        Name: {{ $name }}<br>
        Email: {{ $email }}<br>
        Message: {{ $message }}<br>
    </p>

@endsection
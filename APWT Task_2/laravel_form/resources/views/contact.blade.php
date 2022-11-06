@extends('layouts.app')
@section('content')
    
    <h1>Contact Us</h1>

    <form action="/contact" method="POST">
        {{csrf_field()}}
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{old('name')}}"><br>
        @if($errors->has('name'))
            <span class="error">{{$errors->first('name')}}</span>
        @endif<br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{old('email')}}"><br>
        @if($errors->has('email'))
            <span class="error">{{$errors->first('email')}}</span>
        @endif<br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" value="{{old('message')}}"></textarea><br><br>
        @if($errors->has('message'))
            <span class="error">{{$errors->first('message')}}</span>
        @endif<br>
        <input type="submit" value="Contact">
    </form>

@endsection
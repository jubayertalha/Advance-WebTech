@extends('layouts.app')
@section('content')
    
    <h1>Registration</h1>

    <form action="/registration" method="POST">
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
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value="{{old('password')}}"><br><br>
        @if($errors->has('password'))
            <span class="error">{{$errors->first('password')}}</span>
        @endif<br>
        <input type="submit" value="Register">
    </form>

@endsection
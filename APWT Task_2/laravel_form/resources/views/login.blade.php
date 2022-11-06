@extends('layouts.app')
@section('content')
    
    <h1>Login</h1>

    <form action="/login" method="POST">
        {{csrf_field()}}
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
        <input type="submit" value="Login">
    </form>

@endsection
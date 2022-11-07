@extends('layouts.appUser')
@section('contentUser')

<h1>Welcome {{$user->name}}</h1>
<h2>Your email is {{$user->email}}</h2>
<a href="{{route('edit', ['id'=>$user->id])}}"><h2>Edit Name</h2></a>

@endsection
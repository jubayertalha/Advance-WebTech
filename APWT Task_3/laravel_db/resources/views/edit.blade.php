@extends('layouts.appUser')
@section('contentUser')

    <h1>Edit Name</h1><br>
    <form action= "{{route('editSubmit',['id'=>$user->id])}}" class = "form-group" method = "post">
        {{csrf_field()}}
        <div class ="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value = "{{$user->name}}" class = "form-control">
            @error('name')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>
        <input type = "submit" class="btn btn-primary" value = "Edit">
    </form>

@endsection
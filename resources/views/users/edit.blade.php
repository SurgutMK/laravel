@extends('base')

@section('content')
<h1>Edit User # - {{ $user->id }}</h1>

@include('users.errors')

<div class="row">
    <div class="col-6">

        <form  action="{{ route('users.update', $user->id) }}" method="POST" >
            
            @csrf
            @method('PUT')
            <div class="form-group">

                <input type="text" class="form-control" name="nick_name" placeholder="Enter nickname"
            value="{{$user->nick_name}}">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$user->name}}">

            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="last_name" aria-describedby="emailHelp"
                    placeholder="Enter lastname" value="{{$user->last_name}}">

            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Avatar</label>
                <input type="file" class="form-control-file" name="avatar">
            </div>

            <div class="form-group">

                <input type="text" class="form-control" name="phone" placeholder="Enter phone" value="{{$user->phone}}">
            </div>

            <div class="form-group">

                <input type="email" class="form-control" name="email" placeholder="name@example.com" value="{{$user->email}}">
            </div>

            <div class="form-group">

                <input type="password" class="form-control" name="password" placeholder="Password" value="{{$user->password}}">
            </div>

            <div class="form-group">

                <input type="text" class="form-control" name="experience" placeholder="Experience" value="{{$user->experience}}">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>


@endsection

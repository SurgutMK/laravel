@extends('base')

@section('content')
<h1>New User</h1>

@include('users.errors')

<div class="row">
    <div class="col-6">

        <form method="POST" action="{{ route('users.store') }}" >
            @csrf
            <div class="form-group">

                <input type="text" class="form-control" name="nick_name" placeholder="Enter nickname"
            value="{{old('nick_name')}}">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{old('name')}}">

            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="last_name" aria-describedby="emailHelp"
                    placeholder="Enter lastname" value="{{old('last_name')}}">

            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Avatar</label>
                <input type="file" class="form-control-file" name="avatar">
            </div>

            <div class="form-group">

                <input type="text" class="form-control" name="phone" placeholder="Enter phone" value="{{old('phone')}}">
            </div>

            <div class="form-group">

                <input type="email" class="form-control" name="email" placeholder="name@example.com" value="{{old('email')}}">
            </div>

            <div class="form-group">

                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <div class="form-group">

                <input type="text" class="form-control" name="experience" placeholder="Experience" value="{{old('experience')}}">
            </div>


            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>


@endsection

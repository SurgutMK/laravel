@extends('base')

@section('content')
<h1>Users</h1>
<a class="btn btn-primary" href="{{ route('users.create') }}" role="button">Create</a>

<form action="{{route('users.index')}}" method="GET">
    <input type="number" name="exp" placeholder="Опыт от">
    <button type="submit" class="btn btn-primary">Фильтр</button>
</form>

<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Mail</th>
            <th scope="col">Phone</th>
            <th scope="col">Exp</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>@if (is_null($user->phone))
                -
                @else
                {{$user->phone}}
                @endif
            </td>
            <td>{{$user->experience}}</td>
            <td>
                <a href="{{route('users.show', $user->id)}}">
                    <i class="fas fa-eye fa-lg"></i>
                </a>
                <a href="{{route('users.edit', $user->id)}}">
                    <i class="far fa-edit fa-lg"></i>
                </a>

                <form class="form-del" action="{{route('users.destroy', $user->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn-del" type="submit"><i class="fas fa-trash-alt fa-lg"></i></button>
                </form>
            </td>
        </tr>
        @endforeach


    </tbody>
</table>
@endsection

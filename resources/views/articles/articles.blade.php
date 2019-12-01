@extends('base')

@section('content')
<h1>Статьи</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Text</th>
            <th scope="col">Link</th>
            <th scope="col">Del</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->name}}</td>
            <td>{{$article->text}}</td>
            <td><a href="{{route('article', $article->id)}}">Read...</a></td>
            <td>
                <form action="{{route('articles.destroy', $article->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


{{ $articles->links() }}





@endsection

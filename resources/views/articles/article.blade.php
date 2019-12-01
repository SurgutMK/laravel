@extends('base')

@section('content')
    <p>Название - ({{$article->name}})</p>

    <p>Текст - ({{$article->text}})</p>

    <p>Авторы - ({{$article->users()->pluck('name')->implode(', ')}})</p>

@endsection


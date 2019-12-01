@extends('base')

@section('content')
    

<div class="row">
    <div class="col-6">

        <div class="form-group">
            Никнейм
            <input type="text" class="form-control" name="nick_name"
                value="{{$user->nick_name}}" readonly>
        </div>
        <div class="form-group">
            Имя
            <input type="text" class="form-control" name="name" value="{{$user->name}}"
                readonly>

        </div>
        <div class="form-group">
            Фамилия
            <input type="text" class="form-control" name="last_name"
                 value="{{$user->last_name}}" readonly>

        </div>

        <div class="form-group">
            Телефон
            <input type="text" class="form-control" name="phone"  value="{{$user->phone}}"
                readonly>
        </div>

        <div class="form-group">
            Почта
            <input type="email" class="form-control" name="email" 
                value="{{$user->email}}" readonly>
        </div>

        <div class="form-group">
            Опыт
            <input type="text" class="form-control" name="experience" 
                value="{{$user->experience}}" readonly>
        </div>



    </div>
</div>
@endsection
@extends('admin.index')
@section('title')
    Список пользователей
@endsection
@section('greeting')
@endsection
@section('page-name')
    Список пользователей
@endsection


@section('content')
    <div class="news center">

        @foreach ($users as $item)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Имя : {{$item->name}}</h5>
                    <p class="card-text">EMAIL : {{$item->email}}</p>
                    <hr>
                    <form action="{{route('admin.users.update', $item)}}" method="post">
                        @csrf
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1-{{$item->id}}" name="is_admin"
                                   class="custom-control-input" value="1"
                            @if($item->is_admin)
                                checked
                                @endif
                                >
                            <label class="custom-control-label" for="customRadio1-{{$item->id}}">Админ</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2-{{$item->id}}" name="is_admin"
                                   class="custom-control-input" value="0" @if(!$item->is_admin)
                                   checked
                                @endif>
                            <label class="custom-control-label" for="customRadio2-{{$item->id}}">Не админ</label>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">изменить права</button>
                            <a href="{{route('admin.users.destroy', $item->id)}}" type="button" class="btn btn-danger">удалить</a>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach


    </div>
@endsection

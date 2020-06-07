@extends('admin.index')
@section('title')
   Список новостей
@endsection
@section('greeting')
@endsection
@section('page-name')
    Список новостей
@endsection


@section('content')
    <div class="news center">

        @foreach ($categories as $item)
            <div class="category-news__item">
                <h3 class="category-news__item-title text-center"> {{ $item->name }}</h3>
                <div class="d-flex justify-content-between m-3">
                    <a href="{{route('admin.category.edit', $item)}}" type="button" class="btn
                    btn-warning">редактировать</a>
                    <a href="{{route('admin.category.destroy', $item)}}" type="button" class="btn
                    btn-danger">удалить</a>
                </div>

            </div>
        @endforeach


    </div>
@endsection

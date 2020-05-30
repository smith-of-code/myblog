@extends('layouts.main')
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

        @foreach ($news as $item)
            <div class="news-item">
                <a class="news-item__link" href="{{ route('news.one', $item->id) }}">
                    <img class="news-item__img" src="{{$item->image}}" alt="">
                    <h3 class="news-item__title"> {{ $item->title }}</h3>
                    <p class="news-item__desc">{{ $item->desc }}</p>

                </a>
                <a href="" class="button button-update"></a>
                <a href="" class="button button-delete"></a>
            </div>
        @endforeach


    </div>
@endsection

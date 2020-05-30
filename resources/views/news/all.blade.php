@extends('layouts.main')
@section('title')
    Все Новости
@endsection
@section('greeting')
@endsection
@section('page-name')
    Все Новости
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
            </div>
        @endforeach


    </div>
@endsection

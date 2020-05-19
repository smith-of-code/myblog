@extends('index')
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
            <a class="news-item__link" href="{{ route('newsOne', $item['id']) }}">
                <img class="news-item__img" src="https://via.placeholder.com/300x70.jpg" alt="">
                <h3 class="news-item__title"> {{ $item['title'] }}</h3>
            </a>
        </div>
    @endforeach


</div>
@endsection

@extends('index')

@section('title')
    {{ $news['title'] }}
@endsection
@section('greeting')
@endsection
@section('page-name')
    {{ $news['title'] }}
@endsection


@section('content')
    <div class="news-content center">
        <img class="news-content__img" src="https://via.placeholder.com/700x150.jpg" alt="">
        <p class="news-content__text">{{ $news['desc'] }}</p>
    </div>
@endsection




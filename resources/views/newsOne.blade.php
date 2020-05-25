@extends('index')

@section('title')
    {{ $news->title }}
@endsection
@section('greeting')
@endsection
@section('page-name')
    {{ $news->title }}
@endsection


@section('content')
    <div class="news-content center">
        <img class="news-content__img" src="{{$news->image}}" alt="">
        <p class="news-content__text">{{ $news->content }}</p>
    </div>
@endsection




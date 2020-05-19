@extends('index')
@section('title')
    Категории
@endsection
@section('greeting')
@endsection
@section('page-name')
    Категории
@endsection


@section('content')
    <div class="category-news center">

        @foreach ($category as $item)
            <div class="category-news__item">
                <a class="category-news__item-link" href="{{ route('categoryNews', $item['id']) }}">
                    <img class="category-news__item-img" src="https://via.placeholder.com/300x70.jpg" alt="">
                    <h3 class="category-news__item-title"> {{ $item['title'] }}</h3>
                </a>
            </div>
        @endforeach


    </div>
@endsection

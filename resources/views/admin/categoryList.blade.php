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

        @foreach ($categories as $item)
            <div class="category-news__item">
                <a class="category-news__item-link" href="{{ route('category.one', $item->id) }}">
                    <h3 class="category-news__item-title"> {{ $item->name }}</h3>
                </a>
            </div>
        @endforeach


    </div>
@endsection

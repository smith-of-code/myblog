@extends('layouts.main')
@section('title')
    Отзывы
@endsection
@section('greeting')
@endsection
@section('page-name')
    Отзывы
@endsection


@section('content')
    <div class="news center">

        @foreach ($feedbackList as $item)
            <div class="news-item">
                <h3 class="news-item__title"> {{ $item->name }}</h3>
                <p class="news-item__desc">{{ $item->content }}</p>

            </div>
        @endforeach


    </div>
@endsection


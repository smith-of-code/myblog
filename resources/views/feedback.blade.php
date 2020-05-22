@extends('index')
@section('title')

@endsection
@section('greeting')

@endsection
@section('page-name')
    Оставить отзыв
@endsection

@section('content')
<div class="add-news center">
    @if(@empty($send))
        <form class="add-news__form" action="{{route('feedbackAdd')}}" method="post">
            @csrf
            <input class="add-news__input add-news__item" name="title" placeholder="Имя">
            <textarea class="add-news__text add-news__item" name="inform" placeholder="текст отзыва"></textarea>
            <button class="add-news__button" type="submit">отправить отзыв</button>
        </form>
        @else
        <h2>ОТЗЫВ ОТПРАВЛЕН</h2>

</div>
@endif

@endsection


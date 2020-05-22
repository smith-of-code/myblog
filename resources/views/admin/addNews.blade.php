@extends('index')
@section('title')
    Добавление новости
@endsection
@section('greeting')

@endsection
@section('page-name')
    Добавление новости
@endsection

@section('content')
<div class="add-news center">
    <form class="add-news__form" action="{{route('newsAdd')}}" method="post">
        @csrf
        <input class="add-news__input add-news__item" name="title" placeholder="название новости">
        <textarea class="add-news__text add-news__item" name="inform" placeholder="текст новости"></textarea>
        <button class="add-news__button" type="submit">добавить новость</button>
    </form>
</div>


@endsection


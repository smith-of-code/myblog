@extends('index')
@section('title')

@endsection
@section('greeting')

@endsection
@section('page-name')
    Оставить отзыв
@endsection

@section('content')
<div class="form-container center">
    @if(@empty($send))
        <form class="form add-news__form center" action="{{route('feedbackAdd')}}" method="post">
            @csrf
            <input class="form__input form__item" name="name" placeholder="Имя">
            <textarea class="form__textarea form__item" name="content" placeholder="текст отзыва"></textarea>
            <button class="form__button" type="submit">отправить отзыв</button>
        </form>
        @else
        <h2>ОТЗЫВ ОТПРАВЛЕН</h2>

</div>
@endif

@endsection



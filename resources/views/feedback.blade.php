@extends('layouts.main')
@section('title')

@endsection
@section('greeting')

@endsection
@section('page-name')
    Оставить отзыв
@endsection

@section('content')
<div class="form-container center">
         <form class="form add-news__form center" action="{{route('feedbackCreate')}}" method="post">
            @csrf
            <input class="form__input form__item" name="name" placeholder="Имя" value="{{ old('name') }}">
             @if($errors->has('name'))
                 <p class="form-error">
                     @foreach($errors->get('name') as $error)
                         {{$error}}
                     @endforeach
                 </p>
             @endif
            <textarea class="form__textarea form__item" name="content" placeholder="текст отзыва">{{ old
            ('content') }}</textarea>
             @if($errors->has('content'))
                 <p class="form-error">
                     @foreach($errors->get('content') as $error)
                         {{$error}}
                     @endforeach
                 </p>
             @endif
            <button class="form__button" type="submit">отправить отзыв</button>
        </form>
</div>


@endsection



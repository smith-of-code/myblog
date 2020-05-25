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
    @if(@empty($newsAdd))
                @else
    <p class="center">Новость добавлена</p>
    @endif
<div class="add-news center">
    <form class="add-news__form" action="{{route('newsAdd')}}" method="post">
        @csrf
        <input class="add-news__input add-news__item" name="title" placeholder="название новости">
        <input class="add-news__input add-news__item" name="desc" placeholder="описание">
        <label>
            <select class="add-news__item" name="category">
                <option selected disabled >выбрать категорию</option>
                @foreach($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </label>

        <textarea class="add-news__text add-news__item" name="content" placeholder="текст новости"></textarea>
        <button class="add-news__button" type="submit">добавить новость</button>
    </form>
</div>


@endsection


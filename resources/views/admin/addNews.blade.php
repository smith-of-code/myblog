@extends('admin.index')
@section('title')
    Добавление новости
@endsection
@section('greeting')

@endsection
@section('page-name')
    Добавление новости
@endsection

@section('content')
    @if(@empty($success))
        @else
        <p class="center">{{$success}}</p>
    @endif
<div class="form-container center">
    <form class="form" action="@if (@empty($news)){{ route('admin.news.create') }}@else{{ route('admin.news.update',
    $news)
    }}@endif" method="post" enctype="multipart/form-data">
        @csrf
        <input class="form__input form__item" name="title" placeholder="название новости" value="{{ $news->title ??
        old('title') }}">
        <input class="form__input form__item" name="desc" placeholder="описание" value="{{ $news->desc ?? old
        ('title') }}">
                    <select class="form__select form__item" name="category_id">
                @foreach($categories as $item)
                <option @if ($item['id'] == old('name')) selected
                        @endif value="{{ $item['id'] }}">{{ $item['name']
                }}</option>
                @endforeach
            </select>
        <textarea class="form__textarea form__item" name="content" placeholder="текст новости">{{ $news->content ?? old
        ('text') }}</textarea>
        <input class="form__input form__item" type="file" name="image">

        <div class="checkbox-container">
            <label class="form__label">Приватная<input class="form__checkbox" type="checkbox" name="is_private"></label>
            <label class="form__label">Опубликовать<input class="form__checkbox" type="checkbox" name="published"></label>
        </div>

        <button class="form__button" type="submit">@if(@empty($news))добавить новость @else сохранить @endif</button>
    </form>
</div>


@endsection


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
        @if($errors->has('title'))
            <p class="form-error">
                @foreach($errors->get('title') as $error)
                    {{$error}}
                    @endforeach
            </p>
            @endif
        <input class="form__input form__item" name="desc" placeholder="описание" value="{{ $news->desc ?? old
        ('desc') }}">
        @if($errors->has('desc'))
            <p class="form-error">
                @foreach($errors->get('desc') as $error)
                    {{$error}}
                @endforeach
            </p>
        @endif
                    <select class="form__select form__item" name="category_id">
                @foreach($categories as $item)
                <option @if ($item['id'] == old('name')) selected
                        @endif value="{{ $item['id'] }}">{{ $item['name']
                }}</option>
                @endforeach
            </select>
        <textarea class="form__textarea form__item" name="content" placeholder="текст новости">{{ $news->content ?? old
        ('text') }}</textarea>
        @if($errors->has('content'))
            <p class="form-error">
                @foreach($errors->get('content') as $error)
                    {{$error}}
                @endforeach
            </p>
        @endif
        <input class="form__input form__item" type="file" name="image">
        @if($errors->has('image'))
            <p class="form-error">
                @foreach($errors->get('image') as $error)
                    {{$error}}
                @endforeach
            </p>
        @endif

        <div class="checkbox-container">
            <label class="form__label">Приватная<input class="form__checkbox" type="checkbox" name="is_private"
                           @if(@empty($news) || $news->is_private == '0') @else checked @endif
                ></label>
            <label class="form__label">Опубликовать<input class="form__checkbox" type="checkbox" name="published"
                          @if(@empty($news) || $news->published == '0') @else checked @endif
                ></label>
        </div>

        <button class="form__button" type="submit">@if(@empty($news))добавить новость @else сохранить @endif</button>
    </form>
</div>


@endsection


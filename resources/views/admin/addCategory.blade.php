@extends('admin.index')
@section('title')
    @if(@empty($category))
        Добавление категории
    @else
        Редактирование категории
    @endif
@endsection
@section('greeting')

@endsection
@section('page-name')
    @if(@empty($category))
        Добавление категории
    @else
        Редактирование категории
    @endif
@endsection

@section('content')
<div class="form-container center">
    <form class="form" action="@if (@empty($category)){{ route('admin.category.create') }}@else{{ route('admin.category.update',
    $category)
    }}@endif" method="post" enctype="multipart/form-data">
        @csrf
        <input class="form__input form__item" name="name" placeholder="название категории" value="{{ $category->name ??
        old('name') }}">
        @if($errors->has('name'))
            <p class="form-error">
                @foreach($errors->get('name') as $error)
                    {{$error}}
                @endforeach
            </p>
        @endif
        <input class="form__input form__item" name="slug" placeholder="слаг" value="{{ $category->slug ??
        old('slug') }}">
        @if($errors->has('slug'))
            <p class="form-error">
                @foreach($errors->get('slug') as $error)
                    {{$error}}
                @endforeach
            </p>
        @endif
        <div class="checkbox-container">
            <label class="form__label">Приватная<input class="form__checkbox" type="checkbox" name="is_private"
                @if(@empty($category) || $category->is_private == '0') @else checked @endif
                ></label>
        </div>

        <button class="form__button" type="submit">@if(@empty($category))добавить категорию @else сохранить
            @endif</button>
    </form>
</div>


@endsection


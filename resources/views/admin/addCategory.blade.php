@extends('admin.index')
@section('title')
    Добавление категории
@endsection
@section('greeting')

@endsection
@section('page-name')
    Добавление категории
@endsection

@section('content')
    @if(@empty($success))
        @else
        <p class="center">{{$success}}</p>
    @endif
<div class="form-container center">
    <form class="form" action="@if (@empty($category)){{ route('admin.category.create') }}@else{{ route('admin.ncategory.update',
    $news)
    }}@endif" method="post" enctype="multipart/form-data">
        @csrf
        <input class="form__input form__item" name="name" placeholder="название категории" value="{{ $category->name ??
        old('title') }}">
        <div class="checkbox-container">
            <label class="form__label">Приватная<input class="form__checkbox" type="checkbox" name="is_private"></label>
        </div>

        <button class="form__button" type="submit">@if(@empty($category))добавить категорию @else сохранить
            @endif</button>
    </form>
</div>


@endsection


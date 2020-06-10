@extends('admin.index')
@section('title')
    @if(@empty($resource))
        Добавление ресурса
    @else
        Редактирование ресурса
    @endif
@endsection
@section('greeting')

@endsection
@section('page-name')
    @if(@empty($resource))
        Добавление ресурса
    @else
        Редактирование ресурса
    @endif
@endsection

@section('content')
    <div class="form-container center">
        <form class="form" action="@if (@empty($resource)){{ route('admin.parser.create') }}@else{{ route('admin
        .resource.update',
    $resource)
    }}@endif" method="post">
            @csrf
            <input class="form__input form__item" name="link" placeholder="ссылка на ресурс" value="{{
            $resource->link ??
        old('name') }}">
            @if($errors->has('link'))
                <p class="form-error">
                    @foreach($errors->get('link') as $error)
                        {{$error}}
                    @endforeach
                </p>
            @endif

            <button class="form__button" type="submit">@if(@empty($resource))добавить ресурс @else сохранить
                @endif</button>
        </form>
    </div>


@endsection

@extends('layouts.admin')
@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать категорию</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>
    <div>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert :message="$error" type="danger"></x-alert>
            @endforeach
        @endif
        <form method="post" action="{{ route('categories.update', ['category' => $category]) }}">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="title">Заголовок</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $category->title }}">
            </div>
            <div class="form-group mb-3">
                <label for="image">Изображение</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            {{--            <div class="form-group">--}}
            {{--                <label for="status">Статус</label>--}}
            {{--                <select class="form-control" name="status" id="status">--}}
            {{--                    <option @if(old('status') === \App\Enums\Posts\Status::DRAFT) selected @endif>--}}
            {{--                        {{ \App\Enums\Posts\Status::DRAFT }}--}}
            {{--                    </option>--}}
            {{--                    <option @if(old('status') === \App\Enums\Posts\Status::ACTIVE) selected @endif>--}}
            {{--                        {{ \App\Enums\Posts\Status::ACTIVE }}--}}
            {{--                    </option>--}}
            {{--                    <option @if(old('status') === \App\Enums\Posts\Status::BLOCKED) selected @endif>--}}
            {{--                        {{ \App\Enums\Posts\Status::BLOCKED }}--}}
            {{--                    </option>--}}
            {{--                </select>--}}
            {{--            </div>--}}

            <div class="form-group mb-3">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" id="description">{{ $category->description }}</textarea>

            </div>
            <div class="form-group mb-3">
                <label for="information">Краткая информация</label>
                <textarea class="form-control" name="information" id="information">{{ $category->information }}</textarea>

            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection

@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать новость</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert :message="$error" type="danger"></x-alert>
            @endforeach
        @endif
        <form method="post" action="{{ route('news.update', ['post' => $post]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="category_id">Категория</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id === $post->category_id) selected @endif>{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="title">Заголовок</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
            </div>
            <div class="form-group mb-3">
                <label for="author">Автор</label>
                <input type="text" class="form-control" name="author" id="author" value="{{ $post->author }}">
            </div>
            <div class="form-group mb-3">
                <label for="image">Изображение</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="form-group mb-3">
                <label for="status">Статус</label>
                <select class="form-control" name="status" id="status">
                    <option @if($post->status === \App\Enums\Posts\Status::DRAFT) selected @endif>{{ \App\Enums\Posts\Status::DRAFT }}</option>
                    <option @if($post->status === \App\Enums\Posts\Status::ACTIVE) selected @endif>{{ \App\Enums\Posts\Status::ACTIVE }}</option>
                    <option @if($post->status === \App\Enums\Posts\Status::BLOCKED) selected @endif>{{ \App\Enums\Posts\Status::BLOCKED }}</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" id="description">{{ $post->description }}</textarea>
            </div>
            <br>

        </form>
        <button type="submit" class="btn btn-success">Save</button>
    </div>
@endsection

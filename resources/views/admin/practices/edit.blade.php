@extends('layouts.admin')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать задачу</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>
    <div>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert :message="$error" type="danger"></x-alert>
            @endforeach
        @endif
        <form method="post" action="{{ route('practices.update', ['practice' => $practice]) }}">

            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="posts_id">posts_id урока</label>
                <input type="number" class="form-control" name="posts_id" id="posts_id" value="{{ $practice->posts_id }}">
            </div>
            <div class="form-group mb-3">
                <label for="homework">Задача</label>
                <input type="text" class="form-control" name="homework" id="homework" value="{{ $practice->homework }}">
            </div>
            <div class="form-group mb-3">
                <label for="image">Изображение</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="form-group mb-3">
                <label for="decision">Решение</label>
                <input type="text" class="form-control" name="decision" id="decision" value="{{ $practice->decision }}">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>

    </div>
@endsection

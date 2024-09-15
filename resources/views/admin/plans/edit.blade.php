@extends('layouts.admin')
@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать план</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>
    <div>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert :message="$error" type="danger"></x-alert>
            @endforeach
        @endif
        <form method="post" action="{{ route('plans.update', ['plan' => $plan]) }}">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="posts_id">Урок</label>
                <select class="form-control" name="posts_id" id="posts_id">
                    @foreach($posts as $post)
                        <option value="{{ $post->id }}" @if($post->id === $plan->posts_id) selected @endif>
                            {{ $post->title }}
                        </option>
                    @endforeach
                </select>
            </div>

{{--            <div class="form-group mb-3">--}}
{{--                <label for="posts_id">posts_id урока</label>--}}
{{--                <input type="number" class="form-control" name="posts_id" id="posts_id" value="{{ $plan->posts_id }}">--}}
{{--            </div>--}}
            <div class="form-group mb-3">
                <label for="title">Заголовок</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $plan->title }}">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection

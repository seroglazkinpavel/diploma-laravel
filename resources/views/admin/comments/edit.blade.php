@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактировать комментарий</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>

    <div>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <x-alert :message="$error" type="danger"></x-alert>
            @endforeach
        @endif
        <form method="post" action="{{ route('comment.update', ['comment' => $comment]) }}">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="user_id">Пользователь</label>
                <select class="form-control" name="user_id" id="user_id">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" @if($user->id === $comment->user_id) selected @endif>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="post_id">Урок</label>
                <select class="form-control" name="post_id" id="post_id">
                    @foreach($posts as $post)
                        <option value="{{ $post->id }}" @if($post->id === $comment->post_id) selected @endif>{{ $post->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="message">Описание</label>
                <textarea class="form-control" name="message" id="message">{{ $comment->message }}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection

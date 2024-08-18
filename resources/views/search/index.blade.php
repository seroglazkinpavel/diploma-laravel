@extends('layouts.base')

@section('page.title', 'Поиск')

@section('content')
<div class="search_block">
    <h1 class="title_search">Результаты запроса</h1>
    @if ($posts === false)
        <p>По вашему запросу результатов нет</p>
    @else
        @foreach($posts as $post)
            <a href="{{ route('home.show', $post->id) }}" class="search_link">Нзвание статьи - {{ $post->title }}</a>
            <hr>
        @endforeach
    @endif
</div>
@endsection

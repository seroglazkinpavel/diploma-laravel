@extends('layouts.base')

@section('page.title', 'Поиск')

@section('content')
    <div class="search_block">
        <h1 class="title_search">Результаты запроса</h1>
        @if ($posts === false)
            <p>По вашему запросу результатов нет</p>
        @else
            @foreach($practices as $practice)
                <a href="{{ route('practice.show', $practice->posts_id) }}" class="search_link">Тема урока проктики - {{ $title }}</a>
                <hr>
            @endforeach
        @endif
    </div>
@endsection

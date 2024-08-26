@extends('layouts.base-category')

@section('page.title', 'Курс'.' '.$title->title)

@section('content')
    <section class="lesson-course-category">
        <hr>
        @foreach ($categories as $cat)
            @if ($cat->getAttribute('id') == $category_id)
                {{ Breadcrumbs::render('category.show', $cat) }}
                <h1 class="main_title" >
                    @if ($cat->getAttribute('title') === 'SQL')
                        <strong>Базы данных и {{ $cat->getAttribute('title') }}</strong>
                    @else
                        <strong>Базовый курс {{ $cat->getAttribute('title') }}</strong>
                    @endif
                </h1>



        <div class="category-course">
            <div class="category-course-content">
                <h2 class="category-course-title">Как будет проходить курс?</h2>
                <div class="">
                    <div class="category-course-block">
                        <div class="category-course-content-item">
                            <img class="category-img-lesson" src="{{ asset('images/lesson.png') }}" alt="lesson">
                            <h3 class="category-course-item-title">Материалы</h3>
                            <p class="category-course-paragraph">Материалы к каждому уроку</p>
                        </div>
                        <div class="category-course-content-item">
                            <img class="category-img-homework" src="{{ asset('images/homework.png') }}" alt="homework">
                            <h3 class="category-course-item-title">Домашки</h3>
                            <p class="category-course-paragraph">Домашние задания ко всем урокам</p>
                        </div>
                        <div class="category-course-content-item">
                            <img class="category-img-practice" src="{{ asset('images/practice.png') }}" alt="practice">
                            <h3 class="category-course-item-title">Практика</h3>
                            <p class="category-course-paragraph">Более 200 заданий и тестов по темам курса</p>
                        </div>
                        <div class="category-course-content-item">
                            <img class="category-img-consultation" src="{{ asset('images/consultation.png') }}" alt="consultation">
                            <h3 class="category-course-item-title">Помощь</h3>
                            <p class="category-course-paragraph">Пишем коментарии к урокам</p>
                        </div>
                    </div>

                    <h2 class="category-course-title">Краткая информация</h2>
                    <h4 class="category-course-homework">Домашнее задание</h4>
                    <p class="category-course-paragraph-homework">К каждому уроку курса есть домашнее задание, которое вы должны сделать для закрепления полученных знаний. Ссылки находятся в разделе с названием содержания программы. Есть готовые решения к каждой задачи. Для проверки усвоенного материала проходите тысты.</p>
                    <h4 class="category-course-homework">Помощь</h4>
                    <p class="category-course-paragraph-homework">Все вопросы можно задавать в меню сайта "контакты". К каждому уроку имеются комментарии.</p>
                    {!! $cat->information !!}
{{--                    <h4 class="category-course-homework">Несколько вступительных слов о Javascript</h4>--}}

{{--                    <p class="category-course-paragraph-homework">JavaScript один из основных, входящих в топ-10, языков программирования. У пользователя появляется больше возможностей--}}
                    {{--                        взаимодействовать с web-страницей.</p><p class="category-course-paragraph-homework">С помощью Javascript web-страница, при взаимодействии с пользователем, из статичной становится интерактивной.</p>--}}
                    {{--                    <p class="category-course-paragraph-homework">JavaScript и Java это разные языки программирования и их не стоит путать.</p>--}}
                    {{--                    <p class="category-course-paragraph-homework">С преобретением знаний вы сможете программировать на страницах не шаблонное, а абсолютно новое--}}
                    {{--                        отображение реакций на действия пользователя.</p><p class="category-course-paragraph-homework">В HTML5 JavaScript стал стандартным языком сценариев и поддерживается всеми современными браузерами.</p>--}}
                    {{--                    <p class="category-course-paragraph-homework">Помимо фронтендной части сайта (того что мы видим в браузере), Javascript можно использовать как серверный язык. Для этого используется  плотформа node.js.</p>--}}
                </div>
            </div>
            @endif
            @endforeach
            <ul class="category-course-list">
                <h2 class="title-sidebar-right"><strong>Содерхание программы</strong></h2>
                @foreach($posts as $post)
                    <li class="category-course-item">
                        <a class="category-nav-link @if(request()->routeIs('home.*', $post->id)) active @endif" href="{{ route('home.show', $post->id) }}">{{ $post->title }}</a>
                    </li>
                    <div class="practice-lesson">
                        <a href="{{ route('practice.show', $post->id) }}"><strong>Практика</strong></a>
                    </div>
                @endforeach
            </ul>
        </div>

    </section>
@endsection
@push('css')
    <style>
        .active {
            color: #9c9c9c;
        }
        .lesson-course-category {
            /*margin-top: 100px;*/
            margin-bottom: 80px;
        }
        .lesson-course-category hr {
            margin-bottom: 10px;
        }
        .category-course-title {
            font-family: Montserrat;
            font-size: 24px;
            text-align: center;
            color: #082838;
            margin-bottom: 30px;
        }

        .category-course-block {
            display: flex;
            justify-content: space-between;
            gap: 25px;
            margin-bottom: 40px;
        }
        .category-course-content-item {
            width: 25%;
        }
        .category-course-item-title {
            text-transform: uppercase;
            font-family: Montserrat;
            text-align: center;
            color: #082838;
        }
        .category-course-paragraph {
            font-family: Montserrat;
            text-align: center;
            color: #828383;
        }
        .category-course-homework {
            font-family: Montserrat;
            color: #082838;
            /*font-size: 18px;*/
            margin-top: 15px;
        }
        .category-course-paragraph-homework {
            font-family: Montserrat;
            color: #828383;
        }
        .practice-lesson {
            font-family: Montserrat;
            color: #828383;
        }
        .category-img-lesson:hover {
            background: url('../images/lesson_1.png') no-repeat;
            background-size: 100%;
        }
        .category-img-homework:hover {
            background: url('../images/homework_1.png') no-repeat;
            background-size: 100%;
        }
        .category-img-practice:hover {
            background: url('../images/practice_1.png') no-repeat;
            background-size: 100%;
        }
        .category-img-consultation:hover {
            background: url('../images/consultation_1.png') no-repeat;
            background-size: 100%;
        }
    </style>
@endpush

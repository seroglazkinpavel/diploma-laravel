@extends('layouts.base')

@section('page.title', 'Главная страница')

@section('content')
    <section class="lesson_course">
    <hr>
    <div class="main page">
        {{ Breadcrumbs::render('home') }}
        <h1 class="title_courses">
            Курсы
        </h1>
        <p>На данный момент представленно 3 курса. Перейти по ним можно на слайде. Вы можете приступить к изучению прямо сейчас. Ниже представлены несколько случайных уроков по курсам.</p>
        <div class="post-course">
            @if(empty($posts))
                Нет не одного поста
            @else
                @foreach($posts as $post)
                    <div class="post-course-item">
                        @if ($post->category_id===1)
                            <p class="title-course">Курс по SQL</p>
                        @elseif($post->category_id===2)
                            <p class="title-course">Курс по JAVASCRIPT</p>
                        @else
                            <p class="title-course">Курс по PHP</p>
                        @endif
{{--                        <div class="plan">--}}
                            <p class="title-plan">План урока</p>
                            <ul class="list-plan">
                                @foreach($plans as $plan)
                                    @if ($plan->posts_id===$post->id)
                                        <li class="item-plan">{{ $plan->title }}</li>
                                    @endif
                                @endforeach
                            </ul>
{{--                        </div>--}}
{{--                        <div class="">--}}
                            <h5 >
                                <a href="{{ route('home.show', $post->id) }}">{{ $post->title }}</a>
                            </h5>
                            <p>Дата: {{ $post->created_at }}</p>

{{--                        </div>--}}
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    </section>
@endsection
@push('css')
    <style>
/* Start План урока */
    .post-course-item {
        /*background:#b3d9a8;*/
        /*background:#5ccccc;*/
        background:#DDE3DE;
        padding: 15px;
        box-sizing: border-box;
    }
    .plan {
        background:#b3d9a8;
        padding: 15px;
        /*width: 30%;*/
        /*float : left;*/
        margin-right: 15px;
    }
    .title-course {
        font-size: 22px;
    }
    .title-plan {
        font-size: 20px;
        text-align: center;
    }
    .list-plan {
        /*list-style-type: circle;*/
        list-style-type: decimal;
        padding-left: 25px;
    }
    .item-plan {
        margin-top: 10px;
        font-size: 16px;
    }
    /* End План урока */
    </style>
@endpush

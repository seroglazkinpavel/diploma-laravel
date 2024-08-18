{{--@extends('layouts.base')--}}
@extends('layouts.base-category')

@section('page.title', $title->title)

@section('content')
    <section class="lesson-course-category">
        <hr>
    @foreach($categories as $cat)
        @if ($cat->getAttribute('id') == $lesson->getAttribute('category_id'))
            {{ Breadcrumbs::render('home.show', $cat, $lesson) }}
            <h1 class="main_title" >
                @if ($cat->getAttribute('title') === 'SQL')
                    Базы данных и {{ $cat->getAttribute('title') }}
                @else
                    Базовый курс {{ $cat->getAttribute('title') }}
                @endif
            </h1>
        @endif
    @endforeach

{{--    --}}
{{--        <div class="category-course-content">--}}
{{--            <h2 class="category-course-content-title">{{ $lesson->title }}</h2>--}}
{{--            <p class="">{{ $lesson->description }}</p>--}}
{{--            {{ $posts->links() }}--}}
{{--            <div class="comment-list">--}}
{{--                <h2 class="section-title">Комментарии ({{ $comments->count() }})</h2>--}}
{{--                @foreach($comments as $comment)--}}
{{--                    <hr>--}}
{{--                    <div class="comment-text">--}}
{{--                        <span class="username">--}}
{{--                            <div>--}}
{{--                                {{ $comment->name }}--}}
{{--                            </div>--}}
{{--                            <span class="text-muted float-right">{{ $comment->created_at }}</span>--}}
{{--                        </span>--}}
{{--                        {{ $comment->message }}--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            @auth()--}}
{{--                <div class="comment-section">--}}
{{--                    <h2 class="section-title mb-5" data-aos="fade-up">Отправить комментарий</h2>--}}
{{--                    <form class="form-comment" action="{{ route('home.comment', $lesson->id) }}" method="post">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group col-12" data-aos="fade-up">--}}
{{--                            <label for="comment" class="sr-only">Comment</label>--}}
{{--                            <textarea name="message" id="comment" class="form-control" placeholder="Напишите комментарий!"cols="25" rows="5"></textarea>--}}
{{--                        </div>--}}
{{--                        <input type="hidden" name="post_id" value="{{ $lesson->id }}">--}}

{{--                        <button type="submit" class="btn">Отправить</button>--}}
{{--                    </form>--}}
{{--                    </div>--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--        <ul class="category-course-list">--}}
{{--            <h2 class="title-sidebar-right">Содерхание программы</h2>--}}
{{--            @foreach($posts as $item)--}}
{{--                <li class="category-course-item {{ request()->is('home.show*') ? 'active' : '' }}">--}}
{{--                    <a class="nav-link " href="{{ route('home.show', $item->id) }}">{{ $item->title }}</a>--}}
{{--                </li> --}}
{{--                <li class="category-course-item">--}}
{{--                    <a class="nav-link @if(request()->routeIs('home.show.*')) active @endif" href="{{ route('home.show', $item->id) }}">{{ $item->title }}</a>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--        </div>--}}
        <div class="wrapper-course">
            <div class="plan">
                <p class="title-plan">План урока</p>
                <ul class="list-plan">
                    @foreach($plans as $plan)
                        <li class="item-plan">{{ $plan->title }}</li>
                    @endforeach
                </ul>
            </div>

            <h2 class="category-course-content-title">{{ $lesson->title }}</h2>
            <div class="operating-principle">
                <h3 class="operating-principle-title"><strong>Принципы работы JavaScript</strong></h3>
                <p class="category-course-content-text">На данном этапе вы должны быть знакомы с созданием HTML-страницы, их структурой и подключением стилей CSS. Но пака эти страницы не обладают интерактивным поведением. Умеют только предоставлять навигацию по ссылкам, реагировать на поведение мышки и тому подобное.</p>
                <p class="category-course-content-text">Для того чтобы расширить требования web-страниц, они должны быть интерактивными, взаимодействовать с пользователем. И тут поможет Javascript.</p>
                <p class="category-course-content-text">Где может применяться? Это: карусели, чаты, аудио, видео плееры, практически все что мы видим передвигается, открывается, перемещается. Мобильные, дисктопные приложения можно писать на javascript. Язык широкого профеля, но основное применение это сайты.</p>
                <p class="category-course-content-text">Опишем поведение оформления web-страницы.</p>
                <p class="category-course-content-text">1. HTML определяет контент страниц, их структуры.</p>
                <p class="category-course-content-text">2. CSS определяет стиль оформления страницы.</p>
                <p class="category-course-content-text">3. Сервер обрабатывает HTTP-запросы, при необходимости передавая их интерпретатору.</p>
                <p class="category-course-content-text">4. Интерпретатор формирует HTML-документ, при необходимости обращаясь к БД.</p>
                <p class="category-course-content-text">Javascript на этой схемы может определить поведение страниц. Допустим страница реагирует, когда пользователь кликает по кнопке "Корзина". Появляется возможность наращивать программный код, выполняющий динамические операции.</p>
                <p class="category-course-content-text">В языках программирования есть какие то входящие данные, программа которая работает с этими данными и результат обработки данных.</p>
                <p class="category-course-content-text" style="text-align:center;"><strong>Схема работы программы.</strong></p>
                <div class="category-course-img">
                    <img src="{{ asset('images/scheme_-program.png') }}" width="777" height="155" alt="scheme_-program">
                </div>
                <p class="category-course-content-text">Примеры обработке данных: 1) входящие данные (нажатие на клавиши, перемещение мыши) → вид программы (3d игра) → исходящие данные (выстрелы из оружия, перемещение персонажа); 2) входящие данные (заполненная форма регистрации на сайте) → вид программы (web-страница) → исходящие данные (письмо на почте пользователя о потверждении email-адреса); 3) входящие данные (видеопоток на сервер youtube ) → вид программы (сервис онлайн-трансляций youtube) → исходящие данные (видеопоток у пользователей, на web-странице в браузере);</p>
                <h3 class="operating-principle-title"><strong>Принципы написания кода на JavaScript</strong></h3>
                <p class="category-course-content-text">Разработчик подключает код JavaScript к странице которая загружается в браузер. После этого уже сам браузер делает все необходимое, чтобы выполнить код.</p>
                <p class="category-course-content-text">1. Страница создается по стандартной схеме. Верстается структура HTML, к ней применяются стили и добавляется содержимое.</p>
                <p class="category-course-content-text">2. К странице подключается код JavaScript, перед закрывающим тегом {{ '</body>' }}. Так делается для того, чтобы все теги были загруженны на странице и только после этого запускался наш скрипт. Все подгружается по порядку сверху вниз. Мы можем подключить js в теги {{ '<header>' }}, но тогда применяем атрибуты defer или acync. Они подгружают скрипты ассинхронно параллельно парсингу страницы.</p>
                <p class="category-course-content-text">Как подключение файла CSS — код можно вынести в отдельный файл. Но как и с CSS, никто не запрещает писать JavaScript-код внутри разметки страницы.</p>
                <p class="category-course-content-text">3. При загрузке страницы браузером происходит построение DOM-модели. Браузер находит код JavaScript и сразу же начинает читать его, подготавливая к запуску. Если в коде найдется ошибка, браузер будет стараться продолжить чтение, чтобы пользователю не отказали в показе запрошенной страницы</p>
                <p class="category-course-content-text">4. Браузер начинает выполнять JavaScript-код в момент обнаружения. При этом нужно помнить, что код выполняется вплоть до закрытия страницы, а не до окончания ее формирования (как это происходит, например, в PHP). Актуальные версии JavaScript имеют высокую производительность. Но надо понимать, что код выполняется на стороне клиента и расходует его ресурсы, а не сервера.</p>
                <p class="category-course-content-text">JavaScript-код к странице подключается при помощи HTML-тега {{ '<script>' }}</p>
                <p class="category-course-content-text">Напишем простую страницу. Пока не будем вникать в код JavaScript— просто подключим его и посмотрим, что произойдет:</p>
                <div class="code-background">
                <p class="category-course-content-text">{{ '<body>' }}</p>
                <p class="category-course-content-text">{{ '<script>' }}</p>
                <p class="category-course-content-text">{{ 'setTimeout(reminder, 5000);' }}</p>
                <p class="category-course-content-text">{{ 'function reminder() {' }}</p>
                <p class="category-course-content-text">{{ 'alert("Скучная страница?");' }}</p>
                <p class="category-course-content-text">{{  '}' }}</p>
                <p class="category-course-content-text">{{ '</script>' }}</p>
                <p class="category-course-content-text">{{ '</body>' }}</p>
                </div>
                <p class="category-course-content-text">При запуске кода в браузере увидим, что через пять секунд браузер отобразит оповещение с заданным текстом. Это малая часть возможностей языка, с которыми нам предстоит познакомиться. Но этот пример в духе «Hello, World» дает общее представление о том, как происходит подключение и вызов скрипта.</p>
                <p class="category-course-content-text">Бывают случаи, когда код выносят в отдельный файл, подключаемый в HTML-коде: если кода много; если код работает на многих страницах сайта</p>
                <p class="category-course-content-text code-background">{{ '<script src="/path/to/script.js"></script>' }}</p>
                <p class="category-course-content-text">В качестве значения атрибута src указывается путь к файлу, содержащему скрипт. Браузер скачивает и выполняет его. Можно указать скрипт, который расположен на другом сервере:</p>
                <div class="code-background">
                    <p class="category-course-content-text">{{ '<script>' }}</p>
                    <p class="category-course-content-text">{{ 'src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"' }}></p>
                    <p class="category-course-content-text">{{ '</script>' }}</p>
                </div>
            </div>
            <div class="comment-list">
                <h2 class="section-title">Комментарии ({{ $comments->count() }})</h2>
                @foreach($comments as $comment)
                    <hr>
                    <div class="comment-text">
                        <span class="username">
                            <div>
                                {{ $comment->name }}
                            </div>
                            <span class="text-muted float-right">{{ $comment->created_at }}</span>
                        </span>
                        {{ $comment->message }}
                    </div>
                @endforeach
            </div>
            @auth()
                <div class="comment-section">
                    <h2 class="section-title mb-5" data-aos="fade-up">Отправить комментарий</h2>
                    <form class="form-comment" action="{{ route('home.comment', $lesson->id) }}" method="post">
                        @csrf
                        <div class="form-group col-12" data-aos="fade-up">
                            <label for="comment" class="sr-only">Comment</label>
                            <textarea name="message" id="comment" class="form-control" placeholder="Напишите комментарий!"cols="25" rows="5"></textarea>
                        </div>
                        <input type="hidden" name="post_id" value="{{ $lesson->id }}">

                        <button type="submit" class="btn">Отправить</button>
                    </form>
                </div>
            @endauth

        </div>
            <h2 class="title-course"><strong>Содерхание программы</strong></h2>
        <ul class="course-list">
            @foreach($posts as $item)
{{--                <li class="category-course-item {{ request()->is('home.show*') ? 'active' : '' }}">--}}
{{--                    <a class="nav-link " href="{{ route('home.show', $item->id) }}">{{ $item->title }}</a>--}}
{{--                </li>--}}
                <li class="course-item">
                    <a class="@if(request()->routeIs('home.show.*')) active @endif" href="{{ route('home.show', $item->id) }}">{{ $item->title }}</a>
                </li>
                <div class="practice">
                    @if (!empty($practice->posts_id))
                    <a href="{{ route('practice.show', $practice->posts_id) }}">Практика</a>
                    @else
                        <p>Практика в разработке</p>
                    @endif
                </div>

            @endforeach
        </ul>
    </section>
@endsection
@push('css')
    <style>
        .lesson-course-category {
            margin-top: 100px;
            margin-bottom: 80px;
        }
        .lesson-course-category hr {
            margin-bottom: 10px;
        }
        .operating-principle-title {
            font-size: 20px;
            margin:10px 0;
        }
        .category-course-img {
            margin:10px auto;
            max-width: 777px;
        }
        .code-background {
            background: #EDEFF0;
            padding: 10px;
            margin: 15px 0;
            width: 100%;
            border: 1px solid #AFB5BC;
        }
        /*.category-course-img img {*/
        /*    display: inline-block;*/
        /*    margin:0 auto;*/
        /*    max-width: 777px;*/
        /*}*/
        .plan {
            background:#b3d9a8;
            padding: 15px;
            width: 30%;
            float : left;
            margin-right: 20px;
            margin-bottom: 5px;
        }
        .title-plan {
            font-size: 24px;
            text-align: center;

        }
        .list-plan {
            /*list-style-type: circle;*/
            list-style-type: decimal;
            padding-left: 25px;
        }
        .item-plan {
            margin-top: 10px;
            font-size: 18px;
        }
        /*.item-plan:before {
            content: "\2192";

        }*/
        .form-comment .btn {
            cursor: pointer;
            font-size: 16px;
            line-height: 20px;
            padding: 10px;
            width: 40%;
            margin-top: 15px;
            border-radius: 5px;
            border: 1px solid #E5E5E5;
            background: #F0F0F0;
        }

        .active {
            color: #9c9c9c;
        }
        /*.active {*/
        /*    background-color: #3498db;*/
        /*    color: #fff;*/

        /*}*/
        /*.category-course-content-title {*/
        /*    font-size: 24px;*/
        /*    margin: 0 auto;*/
        /*}*/
        .comment-list {
            margin: 45px 0;
        }
        .comment-section {
            width: 100%;
        }
        .section-title {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .form-comment .form-control {
            width: 100%;
        }
        /*.title-course {*/
        /*    font-size: 20px;*/
        /*    margin-top: 25px;*/
        /*}*/
        /*.course-list {*/
        /*    display: flex;*/
        /*    padding: 1rem 0;*/
        /*    margin: 0 auto;*/
        /*    overflow-x: auto;*/
        /*    !*outline: solid 1px;*!*/
        /*}*/
        /*.course-item {*/
        /*    flex: 0 0 200px;*/
        /*    !*height: 100px;*!*/
        /*    background: #7bb269;*/
        /*    color: #222;*/
        /*    border-radius: 5px;*/
        /*    padding: 1rem;*/
        /*    margin-right: 1rem;*/
        /*}*/
        /*.practice {*/
        /*    background: #7bb269;*/
        /*    color: #222;*/
        /*    border-radius: 5px;*/
        /*    padding: 1rem;*/
        /*    margin-right: 1rem;*/
        /*}*/
    </style>
@endpush

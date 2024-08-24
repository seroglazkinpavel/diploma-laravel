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

            @auth()
                <div class="button">
                    <a href="#" id="open_pop_up">Оценить урок</a>
                </div>
                <div class="pop_up" id="pop_up">
                    <div class="pop_up_conteiner">
                        <div class="pop_up_body" id="pop_up_body">
                            <p>Оцените качество урока</p>
                            <form action="{{ route('practice.estimation', $lesson->id) }}" name="myForm" id="myForm" method="post">
                                @csrf
                                <select id="select-form" class="select-events" size="4" name="mySelect">
                                    <option value="Отлично" class="icon-1"></option>
                                    <option value="Хорошо" class="icon-2"></option>
                                    <option value="Слабо" class="icon-3"></option>
                                    <option value="Очень плохо" class="icon-4"></option>
                                </select>
                                <div class="form-radio">
                                    <label class="form-label">Было ли вам достаточно информации по теме?</label>
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="payment" value="Да, все было понятно и хватило" class="real-radio-btn">
                                            <span class="custom-radio-btn"></span>
                                            Да, все было понятно и хватило
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="payment" value="Было много полезного, но хотелось бы больше" class="real-radio-btn">
                                            <span class="custom-radio-btn"></span>
                                            Было много полезного, но хотелось бы больше
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="payment" value="Было недостаточно" class="real-radio-btn">
                                            <span class="custom-radio-btn"></span>
                                            Было недостаточно
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="payment" value="Я ничего не понял" class="real-radio-btn">
                                            <span class="custom-radio-btn"></span>
                                            Я ничего не понял
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12" data-aos="fade-up">
                                    <label for="message" class="sr-only">Comment</label>
                                    <textarea name="message" id="message" class="form-control" placeholder="Дополните отзыв об уроке!"cols="25" rows="5"></textarea>
                                </div>
                                {{--                        <button>Отправить</button>--}}
                                <input type="submit" name="submit" value="Отправить" class="form-submit">
                            </form>
                            <div class="pop_up_close" id="pop_up_close">&#10006</div>
                        </div>
                    </div>
                </div>
            @endauth

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

        /* Start всплывающее окно */
        * {
            margin:0;
            padding:0;
            box-sizing: border-box;
        }

        .button {
            margin-top: 40px;
            text-align: center;
        }

        .button a {
            font-family: Montserrat;
            /*background-color: orange;*/
            background-color: #7896CB;
            padding: 20px 50px;
            border-radius: 10px;
            text-decoration: none;
            color: #fff;
            font-weight: 500;
        }

        .pop_up {
            /*display: none;*/
            width: 100%;
            height: 100%;
            position: fixed;
            left: 0;
            top: 0;
            /*background-color: rgba(0,0 , 0, .8);*/
            background-color: transparent;
            z-index: 2;
            transform: translateY(-44.5%) scale(0);
            transition: .4s ease-in-out;
        }

        .pop_up.active {
            /*display: block;*/
            transform: translateY(0%) scale(1);
            background-color: rgba(0,0 , 0, .8);
        }

        .pop_up_conteiner {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .pop_up_body {
            margin:auto;
            /*width: 500px;*/
            background-color: #fff;
            border-radius: 10px;
            text-align: center;
            padding: 100px 15px 110px 15px;
            position: relative;
        }

        .pop_up_body p {
            font-size: 28px;
            font-family: Montserrat;
            font-weight: 600;
            color: #22262D;
            margin-bottom: 40px;
        }

        .pop_up_body input {
            display: block;
            margin: 25px auto 0px auto;
            width: 330px;
            padding: 17px 20px;
            background-color: #E5E5E5;
            border-radius: 10px;
            border: none;
            font-family: Montserrat;
            font-weight: 500;
            font-size: 18px;
            color: #B9909F;
        }

        .pop_up_body input:focus {
            outline:none;
        }

        .pop_up_body .form-submit {
            cursor: pointer;
            display: block;
            /*width: 330px;*/

            margin: 60px auto 0px auto;
            padding: 10px 20px;
            font-family: Montserrat;
            font-weight: 500;
            font-size: 16px;
            border: none;
            color: #fff;
            border-radius: 10px;
            /*background-color: orange;*/
            /*background-color: #7896CB;*/
            background-color: #CECECD;
        }

        .pop_up_close {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 21px;
            cursor: pointer;
        }
        /* End всплывающее окно */
        /* Start select */

        .form-label {

            display: block;
            font-size: 20px;
            font-family: Montserrat;
            font-weight: 600;
            color: #22262D;
            margin: 20px;

        }

        select
        {
            /*width: 265px;*/
            border: none;
        }

        option
        {
            /*padding-left: 20px;*/
            padding-top: 3px;
            padding-bottom: 3px;
            /*height: 64px;*/
            height: 90px;
            display: inline-block;
            /*width: 64px;*/
            width: 90px;
        }

        /*.icon-1:hover {*/
        /*    !*background: url('../images/smiley.png') no-repeat;*!*/
        /*    background: url('../images/smiley_8.png') no-repeat;*/
        /*}*/

        /*.icon-2:hover {*/
        /*    !*background: url('../images/smiley_2.png') no-repeat;*!*/
        /*    background: url('../images/smiley_10.png') no-repeat;*/
        /*}*/

        /*.icon-3:hover {*/
        /*    !*background: url('../images/smiley_4.png') no-repeat;*!*/
        /*    background: url('../images/smiley_12.png') no-repeat;*/
        /*}*/

        /*.icon-4:hover {*/
        /*    !*background: url('../images/smiley_6.png') no-repeat;*!*/
        /*    background: url('../images/smiley_14.png') no-repeat;*/
        /*}*/

        .icon-1
        {
            /*background: url('../images/smiley_1.png') no-repeat;*/
            /*background-size: 64px;*/
            background: url('../images/smiley_8.png') no-repeat;
            background-size: 90px;
            /*padding-left: 20px;*/
            background-position: 0 1px;
        }

        .icon-2
        {
            /*background: url('../images/smiley_3.png') no-repeat;*/
            /*background-size: 64px;*/
            background: url('../images/smiley_10.png') no-repeat;
            background-size: 90px;
            /*padding-left: 20px;*/
            /*background-position: 0 1px;*/
        }

        .icon-3
        {
            /*background: url('../images/smiley_5.png') no-repeat;*/
            /*background-size: 64px;*/
            background: url('../images/smiley_12.png') no-repeat;
            background-size: 90px;
            /*padding-left: 20px;*/
            /*background-position: 0 1px;*/
        }

        .icon-4
        {
            /*background: url('../images/smiley_7.png') no-repeat;*/
            /*background-size: 64px;*/
            background: url('../images/smiley_14.png') no-repeat;
            background-size: 90px;
            /*padding-left: 20px;*/
            /*background-position: 0 1px;*/
        }

        select.icon-1,
        select.icon-2,
        select.icon-3,
        select.icon-4
        {
            padding-top: 2px;
            padding-bottom: 3px;
            padding-left: 16px;
            background-position: 0 1px;
        }
        /* End select */
        /* Start Радио кнопки */

        .form-group {
            text-align: initial;
            margin-left: 80px;
            margin-bottom: 10px;
        }
        /* Рисуем внешний круг радиокнопки*/
        .custom-radio-btn {
            position: relative; /* Родительский элемент*/
            display: inline-block; /* Для применения рамок, размеров*/
            width: 16px;
            height: 16px;
            background: #fff;
            border: 1px solid #a3a4a7; /*#a3a4a7 Толщина, стиль, цвет рамки#CECECD*/
            border-radius: 50%; /* Получение круга*/
            vertical-align: text-top; /* Выравнивание кнопки по центру*/
            margin-right: 5px; /* Отступ между кнопкой и меткой*/
        }

        /* Рисуем внутренний круг */
        .custom-radio-btn::before {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            background: #a3a4a7;
            border-radius: 50%;

            /* Выравниваем по центру относительно внешнего круга */
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale(0);

            /* Плавный переход трансформации масштабирования */
            transition: 0.2s ease-in;
        }
        .real-radio-btn:checked + .custom-radio-btn::before {
            transform: translate(-50%, -50%) scale(1);
        }
        .real-radio-btn {
            /* Скрываем реальную радио кнопку*/
            width: 0;
            height: 0;
            position: absolute;
            opacity: 0;
            z-index: -1;
        }

        .form {
            /*width: 350px;*/
            margin: 0 auto;
        }
        .form-control {
            width: 100%;
        }
        /* End Радио кнопки */
    </style>
@endpush
@push('js')
<script>
    let coll = document.getElementsByClassName('collapsible');
    for (let i = 0; i < coll.length; i++) {
        coll[i].addEventListener('click', function() {
            this.classList.toggle('active');
            let content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            }else{
                content.style.maxHeight = content.scrollHeight + 'px'
            }
        })
    }

    // всплывающее окно
    const openPopUp = document.getElementById('open_pop_up');
    const closePopUp = document.getElementById('pop_up_close');
    const popUp = document.getElementById('pop_up');

    openPopUp.addEventListener('click', function(e){
        e.preventDefault();
        popUp.classList.add('active');
    })

    closePopUp.addEventListener('click', () => {
        popUp.classList.remove('active');
    })

    // select
    // Функция очистки класса
    function cleanSelect (select) {
        // Очищаем от стилей
        return $(select).removeClass('icon-1').removeClass('icon-2').removeClass('icon-3').removeClass('icon-4')
    }

    // Формируем select и его обработчики
    function formSelect() {
        // получаем выпадающий список с уже очищенными классами
        var select = cleanSelect('.select-events');

        // Добавляем класс, который соответствует выбранному элементу
        //select.addClass(select.val() == '1' ? 'icon-1' : 'icon-2');
        select.filter(function() {
            return ($(this).val() == '1');
        }).addClass('icon-1');
        select.filter(function() {
            return ($(this).val() == '2');
        }).addClass('icon-2');
        select.filter(function() {
            return ($(this).val() == '3');
        }).addClass('icon-3');
        select.filter(function() {
            return ($(this).val() == '4');
        }).addClass('icon-4');
        // Добавляем стили, чтобы у списка не было видно полосы прокрутки
        select.css({ height: '90px', overflow: 'hidden', zIndex: '40000', padding:0 });

        // Определяем обработчик на событие ухода мышки с области элемента
        select.on('mouseleave', function () {
            // Устанавливаем обычный размер
            this.size = 4;
            // Добавляем класс стиля в соответствии с выбранным элементом
            //cleanSelect(this).addClass($(this).val() == '1' ? 'icon-1' : 'icon-2');
            cleanSelect(this).filter(function() {
                return ($(this).val() == '1');
            }).addClass('icon-1');
            cleanSelect(this).filter(function() {
                return ($(this).val() == '2');
            }).addClass('icon-2');
            cleanSelect(this).filter(function() {
                return ($(this).val() == '3');
            }).addClass('icon-3');
            cleanSelect(this).filter(function() {
                return ($(this).val() == '4');
            }).addClass('icon-4');
        });

        // Определяем обработчик на событие ухода мышки с области элемента
        select.on('mouseover', function () {
            // Очищаем стиль списка, чтобы он не мешал отображению
            cleanSelect(this);
            // Устанавливаем размер, равный количеству элементов
            this.size = $(this).find('option').length;
        });
    }

    // После загрузки DOM - получаем список
    $(function () {
        formSelect();
    });
    /* === Start Обработка формы === */
    // $(function() {
    //     // при нажатию на кнопку с типом submit
    //     $('#myForm input[type="submit"]').click(function(e) {
    //         // отменяем стандартное поведение браузера
    //         e.preventDefault();
    //         // переменная, которая будет содержать данные серилизации
    //         var $data;
    //
    //         $data = $(this).parent('form').serializeArray();
    //         console.log($data);
    //         // для отправки данных будем использовать технологию ajax
    //         //   url - адрес скрипта, с помощью которого будем обрабатывать форму на сервере
    //         //   type - метод отправки запроса (POST)
    //         //   data - данные, которые необходимо передать серверу
    //         //   success - функция, которая будет вызвана, когда ответ прийдёт с сервера
    //         $.ajax({
    //             url: $(this).parent('form').attr('action'),
    //             type: 'post',
    //             data: $data,
    //             success: function(result) {
    //                 //popUp.classList.remove('active');
    //                 location.reload();
    //             }
    //         })
    //     });
    // });

    /* === End Обработка формы === */

</script>
@endpush

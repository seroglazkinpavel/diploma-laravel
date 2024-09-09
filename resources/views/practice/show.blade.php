@extends('layouts.base-category')

@section('page.title', $title->title)

@section('content')
    <section class="lesson_course">
        <hr>
        @foreach($categories as $cat)

            @if ($cat->getAttribute('id') == $category_id)
                {{ Breadcrumbs::render('practice.show', $cat, $lesson, $title_lesson) }}

            @endif
        @endforeach
        <h1 class="main_title">Практика на тему: "{{ $title_lesson }}"</h1>
        <h2 class="category-course-content-title">Дамашние задания</h2>
        @foreach($practices as $exercise)
            <div class="block-homework">
                {!! $exercise->homework !!}
            </div>
            @if ($exercise->image === Null)
                <button class="collapsible">Решается самостоятельно</button>
            @else
                <button class="collapsible">Решения задачи</button>
            @endif
            <div class="block-collapsible">
                <img src="{{ asset($exercise->image) }}" alt="">
            </div>
        @endforeach

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('success') }}</strong>
            </div>
        @else
            <div class="alert alert-error" role="alert">
                 <strong>{{ session('error') }}</strong>
            </div>
        @endif

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
        <h2 class="title-course"><strong>Содерхание программы</strong></h2>
        <ul class="course-list">
            @foreach($posts as $item)
                <li class="course-item">
                    <a class="@if(request()->routeIs('home.show.*')) active @endif" href="{{ route('home.show', $item->id) }}">{{ $item->title }}</a>
                </li>
                <div class="practice">
                    <a href="{{ route('practice.show', $item->id) }}">Практика</a>
                </div>
            @endforeach
        </ul>
    </section>
@endsection
@push('css')
    <style>
        .block-homework {
            margin-top: 15px;
        }
        .collapsible {
            margin-top: 15px;
            background-color: #777;
            color: white;
            cursor: pointer;
            padding: 13px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .active {
            color: #9c9c9c;
        }
        .collapsible:hover {
            background-color: #555;
        }
        .block-collapsible {
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
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
            width: 265px;
            border: none;
        }

        option
        {
            padding-left: 20px;
            padding-top: 3px;
            padding-bottom: 3px;
            height: 64px;
            display: inline-block;
            width: 64px;
        }

        /* option:hover
        {
            background-color: #eee;
        } */

        .icon-1:hover {
            background: url('../images/smiley.png') no-repeat;
        }

        .icon-2:hover {
            background: url('../images/smiley_2.png') no-repeat;
        }

        .icon-3:hover {
            background: url('../images/smiley_4.png') no-repeat;
        }

        .icon-4:hover {
            background: url('../images/smiley_6.png') no-repeat;
        }

        .icon-1
        {
            background: url('../images/smiley_1.png') no-repeat;
            background-size: 64px;
            padding-left: 20px;
            /*background-position: 0 1px;*/
        }

        .icon-2
        {
            background: url('../images/smiley_3.png') no-repeat;
            background-size: 64px;
            padding-left: 20px;
            /*background-position: 0 1px;*/
        }

        .icon-3
        {
            background: url('../images/smiley_5.png') no-repeat;
            background-size: 64px;
            padding-left: 20px;
            /*background-position: 0 1px;*/
        }

        .icon-4
        {
            background: url('../images/smiley_7.png') no-repeat;
            background-size: 64px;
            padding-left: 20px;
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


        /*.form_radio {*/
        /*    text-align: initial;*/
        /*    margin-bottom: 10px;*/
        /*}*/
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
        /*.form_radio input[type=radio] {*/
        /*    display: none;*/
        /*}*/
        /*.form_radio label {*/
        /*    display: inline-block;*/
        /*    cursor: pointer;*/
        /*    position: relative;*/
        /*    padding-left: 25px;*/
        /*    margin-right: 0;*/
        /*    line-height: 18px;*/
        /*    user-select: none;*/
        /*}*/
        /*.form_radio label:before {*/
        /*    content: "";*/
        /*    display: inline-block;*/
        /*    width: 17px;*/
        /*    height: 18px;*/
        /*    position: absolute;*/
        /*    left: 0;*/
        /*    bottom: 1px;*/
        /*    background: url(https://snipp.ru/img/radio-1.png) 0 0 no-repeat;*/
        /*}*/

        /*!* Checked *!*/
        /*.form_radio input[type=radio]:checked + label:before {*/
        /*    background: url(https://snipp.ru/img/radio-2.png) 0 0 no-repeat;*/
        /*}*/

        /*!* Hover *!*/
        /*.form_radio label:hover:before {*/
        /*    filter: brightness(120%);*/
        /*}*/

        .form {
            /*width: 350px;*/
            margin: 0 auto;
        }
        .form-control {
            width: 100%;
        }
        /* End Радио кнопки */
        /* Start message and error */
        .alert-success {
            text-align: center;
            color: #2ca02c;
            margin-top: 15px;
        }
        .alert-error {
            text-align: center;
            color: #9D2334;
            margin-top: 15px;
        }
        /* End message and error */
        @media (max-width: 425px) {
            .pop_up_body {
                padding:50px 15px;
            }
        }
        @media (max-width: 375px) {
            .icon-1, .icon-2, .icon-3, .ison-4  {
                max-width: 70px;

            }
            .form-group {
                margin-left: 0;
            }
            .form-control, .col-12, .form-radio {
                max-width: 310px;
                margin: 0 auto;
            }
            .pop_up_close {
                right: 40px;
            }
            .pop_up_body p {
                font-size: 26px;
            }
            .pop_up_body .form-submit {
                margin: 30px auto 0px;
            }
        }
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
            select.css({ height: '70px', overflow: 'hidden', zIndex: '40000', padding:0 });

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

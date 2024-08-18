@extends('layouts.base')

@section('page.title', 'Контакты')

@section('content')


<div class="top-menu">
    <h1 class="title-contact">Контакты</h1>
    <div class="block-contact">
        <fieldset>
            <legend>Для отправки нам сообщения, заполните форму ниже:</legend>
{{--        <p class="txt">--}}
{{--            --}}
{{--        </p>--}}
        <form action="" class="form-contact" method="get" autocomplete="off">
            @csrf
            <div class="form-field">
                <p><input type="text" id="name" class="form-control" placeholder="Ваше имя"></p>
                <p><input type="email" id="email" class="form-control" value="" placeholder="Ваш Email"></p>
            </div>
            <div class="form-field">
                <textarea id="message" class="form-message" placeholder="Сообщение"></textarea>
                <div class="check-block">
                    <input type="checkbox" name="rulles" id="rulles_get_pop_up" checked>
                    <span class="checkmark" onclick="setMarkerCheckbox()"><i class='fas fa-check'></i></span>
                    <label for="rulles" onclick="setMarkerCheckbox()">Я даю согласие на <noindex><a href="rights" rel="nofollow">обработку данных</a></noindex></label>
                </div>
{{--                <div id="send" class="btn red">--}}
{{--                    Отправить	<div class="btn__blobs">--}}
{{--                        <div></div>--}}
{{--                        <div></div>--}}
{{--                        <div></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <button type="submit" class="btn">Отправить</button>
            </div>
        </form>
        </fieldset>
    </div>
</div>
@endsection
@push('css')
    <style>
        .top-menu {
            margin: 30px 0;
        }
        .title-contact {
            /*text-align: center;*/
            font-size: 28px;
            margin-bottom: 25px;
        }
        .block-contact {
            max-width: 70%;
        }
        fieldset {
            border: 1px solid #9B9B9E;
            padding: 15px;
            box-sizing: border-box;
        }
        .form-field {
            width: 45%;
        }
        p:first-child {
            margin-bottom: 10px;
        }
        .form-message {
            width: 100%;
            height: 100px;
            border-radius: 5px;
            border: 1px solid #E3DFDD;
        }
        .form-contact {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .form-contact .form-control {
            outline: none;
            border-radius: 5px;
            border: 1px solid #E3DFDD;
            font-size: 16px;
            line-height: 18px;
            padding-left: 10px;
            height: 45px;
            width: 100%;
            box-sizing: border-box;
        }
        .check-block {
            margin-top: 15px;
        }
        .form-contact .btn {
            cursor: pointer;
            font-size: 16px;
            line-height: 20px;
            padding: 10px;
            width: 100%;
            margin-top: 15px;
            border-radius: 5px;
            border: 1px solid #E5E5E5;
            background: #F0F0F0;
        }
    </style>
@endpush

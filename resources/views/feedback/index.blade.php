@extends('layouts.base')

@section('page.title', 'Контакты')

@section('content')
    <section class="lesson_course">
    <hr>
    {{ Breadcrumbs::render('contact') }}
    <div class="top-menu">
        <h1 class="title-contact">Обратная связь</h1>
        <div class="block-contact">
{{--            @if($errors->any())--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <x-alert :message="$error" type="danger"></x-alert>--}}
{{--                @endforeach--}}
{{--            @endif--}}
            @if (session('success'))
                <div class="alert alert-success" role="alert" style="color: green;">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <fieldset>
                <legend>Для отправки нам сообщения, заполните форму ниже:</legend>
            <form action="{{ route('feedback.send') }}" class="form-contact" method="post">
                @csrf
                <div class="form-field">
                    <p><input type="text" name="name" id="name" class="form-control" placeholder="Ваше имя" value="{{ old('name') ?? '' }}"></p>
                    <p><input type="email" name="email" id="email" class="form-control" value="{{ old('email') ?? '' }}" placeholder="Ваш Email"></p>
                </div>
                <div class="form-field">
                    <textarea id="message" name="message" class="form-message form-message-contact" placeholder="Сообщение">{{ old('message') ?? '' }}</textarea>
                    <div class="check-block">
                        <input type="checkbox" name="rulles" id="rulles_get_pop_up" checked>
                        <span class="checkmark" onclick="setMarkerCheckbox()"><i class='fas fa-check'></i></span>
                        <label for="rulles" onclick="setMarkerCheckbox()">Я даю согласие на <noindex><a href="rights" rel="nofollow">обработку данных</a></noindex></label>
                    </div>
                    <button type="submit" class="btn">Отправить</button>
                </div>
            </form>
            </fieldset>
        </div>
    </div>
    </section>
@endsection
{{--@push('css')--}}
{{--    <style>--}}
{{--        .lesson_course hr {--}}
{{--            margin-bottom: 20px;--}}
{{--        }--}}
{{--        .top-menu {--}}
{{--            margin: 30px 0;--}}
{{--        }--}}
{{--        .title-contact {--}}
{{--            text-align: center;--}}
{{--            font-size: 28px;--}}
{{--            margin-bottom: 25px;--}}
{{--        }--}}
{{--        .block-contact {--}}
{{--            max-width: 70%;--}}
{{--        }--}}
{{--        fieldset {--}}
{{--            border: 1px solid #9B9B9E;--}}
{{--            padding: 15px;--}}
{{--            box-sizing: border-box;--}}
{{--        }--}}
{{--        .form-field {--}}
{{--            width: 45%;--}}
{{--        }--}}
{{--        p:first-child {--}}
{{--            margin-bottom: 10px;--}}
{{--        }--}}
{{--        .form-message {--}}
{{--            width: 100%;--}}
{{--            height: 100px;--}}
{{--            border-radius: 5px;--}}
{{--            border: 1px solid #E3DFDD;--}}
{{--        }--}}
{{--        .form-contact {--}}
{{--            display: flex;--}}
{{--            justify-content: space-between;--}}
{{--            margin-bottom: 10px;--}}
{{--        }--}}
{{--        .form-contact .form-control {--}}
{{--            outline: none;--}}
{{--            border-radius: 5px;--}}
{{--            border: 1px solid #E3DFDD;--}}
{{--            font-size: 16px;--}}
{{--            line-height: 18px;--}}
{{--            padding-left: 10px;--}}
{{--            height: 45px;--}}
{{--            width: 100%;--}}
{{--            box-sizing: border-box;--}}
{{--        }--}}
{{--        .check-block {--}}
{{--            margin-top: 15px;--}}
{{--        }--}}
{{--        .form-contact .btn {--}}
{{--            cursor: pointer;--}}
{{--            font-size: 16px;--}}
{{--            line-height: 20px;--}}
{{--            padding: 10px;--}}
{{--            width: 100%;--}}
{{--            margin-top: 15px;--}}
{{--            border-radius: 5px;--}}
{{--            border: 1px solid #E5E5E5;--}}
{{--            background: #F0F0F0;--}}
{{--        }--}}
{{--    </style>--}}
{{--@endpush--}}

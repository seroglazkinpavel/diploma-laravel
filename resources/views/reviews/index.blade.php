{{--@extends('layouts.base')--}}

{{--@section('page.title', $title->title)--}}

{{--@section('content')--}}
{{--    <section class="reviews">--}}
{{--        <hr>--}}
{{--        <h1 class="reviews-title">Отзывы-цитаты</h1>--}}
{{--        <div class="form-reviews">--}}
{{--            @if($errors->any())--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <x-alert :message="$error" type="danger"></x-alert>--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--            <form method="post" action=""  class="form_login" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                <p>--}}
{{--                    <label for="author">Имя</label>--}}
{{--                    <input type="text" class="form-control" name="author" id="author" value="">--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    <label for="image">Изображение</label>--}}
{{--                    <input type="file" class="form-control" name="image" id="image">--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    <label for="description">Комментарий</label>--}}
{{--                    <textarea class="form-control" name="description" id="description"></textarea>--}}
{{--                </p>--}}
{{--                <button type="submit" class="btn">Save</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}

@extends('layouts.base')

@section('page.title', 'Отзывы')

@section('content')
    <section class="lesson_course">
        <hr>
        {{ Breadcrumbs::render('reviews') }}
        <div class="top-menu">
            <h1 class="title-contact">Отзывы-цитаты</h1>
            <div class="reviews-list">
                <h2 class="section-title">Отзывы ({{ $reviews->count() }})</h2>
                @foreach($reviews as $review)
                    <div class="reviews-item">
                        <div class="reviews-header">
                            <div class="reviews-header-left">
                                <div class="reviews-avatar">
                                    <img src="{{ Storage::disk('public')->url($review->image) }}">
                                </div>
                                <div class="reviews-username">
                                    {{ $review->name }}
                                </div>
                            </div>
                            <div class="creation time">
                                {{ $review->created_at }}
                            </div>
                        </div>
                        <div class="reviews-text">
                            {{ $review->message }}
                        </div>
                    </div>
                @endforeach
            </div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <x-alert :message="$error" type="danger"></x-alert>
                @endforeach
            @endif
            <div class="block-contact">
                <fieldset>
                    <legend>Для отправки нам сообщения, заполните форму ниже:</legend>

                    <form action="{{ route('reviews.store') }}" class="form-contact" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="form-field">
                            <p><input type="text" id="name"  name="name" class="form-control"  value="" placeholder="Ваше имя"></p>
                            <p><input type="file" id="image"  name="image" class="form-control" value="" placeholder="Изображение"></p>
                            <p class="limitation">Размеры фото, ширины и высоты, не более 100px.</p>
                        </div>
                        <div class="form-field">
                            <textarea id="message"  name="message" class="form-message" placeholder="Сообщение"></textarea>
                            <button type="submit" class="btn">Отправить</button>
                        </div>
                    </form>
                </fieldset>
            </div>
    </div>
    </section>
@endsection

@push('css')
    <style>
        .reviews-list {
            margin-bottom: 40px;
        }
        .section-title {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .reviews-item {
            background: #F0F0F0;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 20px;
        }
        .reviews-header {
            display: flex;
            justify-content: space-between
        }
        .reviews-header-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .reviews-text {
            margin-top: 10px;
        }
        .limitation {
            font-size: 14px;
            margin-left: 10px;
            margin-top: 10px;
        }
    </style>
@endpush

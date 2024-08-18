@extends('layouts.base')

@section('page.title', 'Авторизация')

@section('content')
{{--    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">--}}

{{--        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">--}}
{{--        --}}{{--<x-guest-layout>--}}
{{--        <!-- Session Status -->--}}
{{--            <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--            <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--                <div>--}}
{{--                    <x-input-label for="email" :value="__('Email')" />--}}
{{--                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--                    <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--                </div>--}}

{{--                <!-- Password -->--}}
{{--                <div class="mt-4">--}}
{{--                    <x-input-label for="password" :value="__('Password')" />--}}

{{--                    <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                                  type="password"--}}
{{--                                  name="password"--}}
{{--                                  required autocomplete="current-password" />--}}

{{--                    <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--                </div>--}}

{{--                <!-- Remember Me -->--}}
{{--                <div class="block mt-4">--}}
{{--                    <label for="remember_me" class="inline-flex items-center">--}}
{{--                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                    </label>--}}
{{--                </div>--}}

{{--                <div class="flex items-center justify-end mt-4">--}}
{{--                    @if (Route::has('password.request'))--}}
{{--                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                            {{ __('Forgot your password?') }}--}}
{{--                        </a>--}}
{{--                    @endif--}}

{{--                    <x-primary-button class="ms-3">--}}
{{--                        {{ __('Log in') }}--}}
{{--                    </x-primary-button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--            --}}{{--</x-guest-layout>--}}
{{--        </div>--}}
{{--    </div>--}}
<div class="auth_block">
    <h1 class="title_login">Авторизация</h1>
    <ul>
        @foreach ($errors->all() as $message)
            <li style="color:red;">{{ $message }}</li>
        @endforeach
    </ul>
    <form method="post" action="{{ route('login') }}" class="form_login" novalidate>
        @csrf
        <p>
            <label for="id_email">E-mail:*</label>
            <input type="email" name="email" class="form-control" autofocus value="{{ old('email') }}" placeholder="ivanov@gmail.com" id="id_email" required>
        </p>
        <p>
            <label for="id_password">Пароль:*</label>
            <input type="password" name="password" class="form-control" autofocus required id="id_password">
        </p>
        <div class="login_checkbox">
            <div class="login_checkbox_remember">
                <input type="checkbox" name="remember" id="cb">
                <label for="cb" class="custom-cb">Запомни меня</label>
            </div>
            <a href="{{ route('password.request') }}" class="">Забыли свой пароль?</a>
        </div>

        <button type="submit" class="btn">Login</button>
    </form>
    <p class="account"><a href="{{ route('register') }}">Регистрация</a></p>
</div>
@endsection

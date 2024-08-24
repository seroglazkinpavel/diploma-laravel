<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>@yield('page.title', 'Diplome')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="wrapper">
    @include('includes.header-category')
{{--    <main class="content center">--}}
{{--        @yield('content')--}}
{{--    </main>--}}
    @include('includes.footer')
    <script src="{{ asset('script.js') }}"></script>
</div>
@stack('js')
</body>
</html>

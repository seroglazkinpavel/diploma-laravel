<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page.title', 'Admin')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/bootstrap.min.css') }}" rel="stylesheet">

    @stack('css')

    <!-- <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=y_1aRsGmnNyackxW3hSDv9mo1oA0wnXDkN4QSXuMaOht7F8hC0ZZZoLJUXGmpd1lJhunF-IRnwW7XhEjVSecfz-ImVIgNuzD76gOqb2qbB8" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9nZXRib290c3RyYXAuY29tL2RvY3MvNS4wL2V4YW1wbGVzL2Rhc2hib2FyZC8"/><style> -->
    <style>

        .nav-item-span {
            display:inline-block;
            margin-left: 5px;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/dashboard.css') }}" rel="stylesheet">
</head>
<body>

<x-admin.header></x-admin.header>
<div class="container-fluid">
    <div class="row">

        <x-admin.sidebar></x-admin.sidebar>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
        </main>
    </div>
</div>

<script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
{{--<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>--}}
<script src="{{ asset('assets/dashboard.js') }}"></script>

@stack('js')
</body>
</html>


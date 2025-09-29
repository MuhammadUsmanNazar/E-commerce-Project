<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.header')

    <main class="main">
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- JavaScript Files - JQUERY MUST BE FIRST -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                width: '100%',
                placeholder: "All categories",
                allowClear: false,
                minimumResultsForSearch: Infinity
            });
            
            AOS.init();
        });
    </script>
</body>
</html>
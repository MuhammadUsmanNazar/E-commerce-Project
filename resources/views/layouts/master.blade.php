<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/header.css') }}" rel="stylesheet"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    @stack('styles')

    <style>
        /* Header Dropdown */
        a {
            text-decoration: none !important;
        }
        .categories-dropdown {
            position: relative;
            width: 100%;
            cursor: pointer;
        }

        .categories-dropdown .form-control {
            cursor: pointer;
            background-color: transparent !important;
            color: #000000 !important;
            font-size: 0.95rem;
            border: none !important;
            box-shadow: none !important;
        }

        .categories-dropdown i {
            color: #000000;
            font-size: 12px;
            transition: transform 0.3s ease;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            width: 100% !important;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            z-index: 1050;
            max-height: 300px;
            overflow-y: auto;
            margin-top: 8px;
            padding: 8px 0;
            animation: fadeInUp 0.2s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(-8px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-item {
            padding: 12px 16px;
            cursor: pointer;
            border-bottom: 1px solid #f3f4f6;
            transition: all 0.2s ease;
            font-size: 0.95rem;
            color: #374151;
            font-weight: 500;
        }

        .dropdown-item:hover {
            background-color: #f8fafc;
            color: #000000;
            transform: translateX(4px);
        }

        .dropdown-item:last-child {
            border-bottom: none;
        }

        .categories-dropdown.active i {
            transform: rotate(180deg);
        }
    </style>

</head>
<body>
    @include('layouts.header')
    @include('components.nav-menu')

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

    @stack('scripts')

    <script>
        $(document).ready(function() {
            // Header categories dropdown hover logic
            $('.categories-dropdown').each(function() {
                let dropdown = $(this);
                let closeTimeout;

                // Mouse enter
                dropdown.on('mouseenter', function() {
                    clearTimeout(closeTimeout);
                    $('.categories-dropdown').not(dropdown).find('.dropdown-menu').removeClass('d-block').addClass('d-none');
                    dropdown.find('.dropdown-menu').removeClass('d-none').addClass('d-block');
                });

                // Mouse leave
                dropdown.on('mouseleave', function() {
                    closeTimeout = setTimeout(function() {
                        dropdown.find('.dropdown-menu').removeClass('d-block').addClass('d-none');
                    }, 300);
                });

                // Click on dropdown item
                dropdown.find('.dropdown-item').on('click', function() {
                    clearTimeout(closeTimeout);
                    var value = $(this).data('value');
                    var text = $(this).text();
                    dropdown.find('.selected-text').text(text);
                    dropdown.find('input[type="hidden"]').val(value);
                    dropdown.find('.dropdown-menu').removeClass('d-block').addClass('d-none');
                });
            });

            // Close header dropdowns when clicking outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('.categories-dropdown').length) {
                    $('.categories-dropdown').find('.dropdown-menu').removeClass('d-block').addClass('d-none');
                }
            });
        });
    </script>
</body>
</html>
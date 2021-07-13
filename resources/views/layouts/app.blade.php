<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eldohub</title>

    <link rel="shortcut icon" href="/img/shorthand-logo.png" type="image/x-icon">

    <link rel="stylesheet" href="/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/owlcarousel/owl.theme.default.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/logo.png" alt="" width="50" height="50" class="d-inline-block align-text-middle">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-us') }}">{{ __('ABOUT US') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('programs') }}">{{ __('OUR PROGRAMS') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('trainings') }}">{{ __('TRAININGS') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">{{ __('BLOG') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @if (isset($title))
            <div class="container">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
            </div>
            @endif
            
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/593d1e5026.js" crossorigin="anonymous"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
          items:4,
          loop:true,
          margin:10,
          autoplay:true,
          autoplayTimeout:1000,
          autoplayHoverPause:true,
          smartSpeed:2000
        });
      </script>
</body>
</html>

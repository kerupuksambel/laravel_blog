<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/bulma.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <nav class="navbar is-fixed-top is-info" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <b>blog!</b>
                </a>
            </div> 
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</html>
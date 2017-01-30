<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="content-type" content="text/html" />


    <title>{{ config('app.name', env('APP_NAME')) }} | Technology News, Advice and Features</title>
    <meta name="description" content="Engadget is a web magazine with obsessive daily coverage of everything new in gadgets and consumer electronics">
    <link rel="canonical" href="{{ config('app.url', env('APP_URL')) }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.engadget.com/">
    <meta property="og:title" content="Engadget | Technology News, Advice and Features">
    <meta property="og:image" content="http://localhost/images/eng-logo-928x201.png">
    <meta property="og:description" content="Engadget is a web magazine with obsessive daily coverage of everything new in gadgets and consumer electronics">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@engadget">
    <meta name="twitter:url" content="https://www.engadget.com/">
    <meta name="twitter:title" content="Engadget | Technology News, Advice and Features">
    <meta name="twitter:description" content="Engadget is a web magazine with obsessive daily coverage of everything new in gadgets and consumer electronics">
    <meta name="twitter:image" content="http://localhost/images/eng-logo-928x201.png">

    <meta name="activeEdition" content="usa">
    <!-- Google Site Verification -->
    <meta name="google-site-verification" content="Engadget" />
    <!-- Bitly Site Verification -->
    <meta name="bitly-verification" content="Engadget" />
    <!-- Pintrest Site Verification -->
    <meta name="p:domain_verify" content="Engadget" />
    <!-- Microsoft Site Validation -->
    <meta name="msvalidate.01" content="Engadget" />
    <!-- ViewPort Sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- iOS -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-touch-fullscreen" content="yes"/>
    <!-- Facebook -->
    <meta property="fb:admins" content="Engadget" />
    <meta property="fb:app_id" content="Engadget" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Engadget" />
    {{ Html::meta('msapplication-TileImage', url('images/eng-e-558.png')) }}
    <!-- Windows 8 Tiles -->
    <meta name="application-name" content="Engadget">
    <meta name="msapplication-TileImage" content="{{ url('/assets/images/apple-touch-icon-144x144.png') }}'">
    <meta name="msapplication-TileColor" content="#2B2D32">
    <!-- IE 11 Tile -->
    <meta name="msapplication-tooltip" content="Engadget">
    <meta name="msapplication-config" content="{{ url('/assets/xml/ieconfig.xml') }}">
    meta($name, $content, array $attributes = [])
    {{ Html::meta('', '') }}
    {{ Html::meta('msapplication-TileColor', '#2B2D32') }}
    {{ Html::meta('msapplication-TileImage', url('images/eng-e-558.png')) }}
    {{ Html::meta('msapplication-square70x70logo', url('images/eng-e-128.png')) }}
    {{ Html::meta('msapplication-square150x150logo', url('images/eng-e-270.png')) }}
    {{ Html::meta('msapplication-wide310x150logo', url('images/eng-e-558x270.png')) }}
    {{ Html::meta('msapplication-square310x310logo', url('images/eng-e-558.png')) }}
    {{ Html::meta('msapplication-notification', "frequency=30;polling-uri=https://notifications.buildmypinnedsite.com/?feed=https://www.engadget.com/rss.xml&amp;id=1;polling-uri2=https://notifications.buildmypinnedsite.com/?feed=https://www.engadget.com/rss.xml&amp;id=2;polling-uri3=https://notifications.buildmypinnedsite.com/?feed=https://www.engadget.com/rss.xml&amp;id=3;polling-uri4=https://notifications.buildmypinnedsite.com/?feed=https://www.engadget.com/rss.xml&amp;id=4;polling-uri5=https://notifications.buildmypinnedsite.com/?feed=https://www.engadget.com/rss.xml&amp;id=5; cycle=1") }}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- RSS -->
    {{ Html::link() }}
    <link rel="alternate" type="application/rss+xml" title="Engadget" href="{{ url('/rss.xml') }}"/>
    <!-- 1 - Apple | 2 - iOS 2.0+ Android 2.1+ (precomposed) -->
    {{ $sizes = [57, 60, 72, 76, 114, 120, 144, 152] }}
    @foreach ($sizes as $sizes)
    {{ Html::link("images/apple-touch-icon-{$size}x{$size}.png", '', ['sizes' => "{$size}x{$size}", 'rel' => 'apple-touch-icon'] ) }}
    {{ Html::link("images/apple-touch-icon-{$size}x{$size}.png", '', ['sizes' => "{$size}x{$size}", 'rel' => 'apple-touch-icon-precomposed'] ) }}
    @endforeach
    <!-- Favicon -->
    {{ $sizes = [16, 32, 96, 160] }}
    @foreach ($sizes as $sizes)
    {{ Html::favicon("images/favicon-{$size}x{$size}.png", ['type' => 'image/png', 'sizes' => "{$size}x{$size}", 'rel' => 'icon'] ) }}
    {{ Html::favicon("images/favicon-{$size}x{$size}.png", ['type' => 'image/png', 'sizes' => "{$size}x{$size}"] ) }}
    @endforeach
    {{ Html::favicon('images/favicon-128.png',     ['type' => 'image/png', 'sizes' => '128x128', 'rel' => 'icon'] ) }}
    {{ Html::favicon('images/favicon-196x196.png', ['type' => 'image/png', 'sizes' => '196x196', 'rel' => 'icon'] ) }}


    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', env('APP_NAME')) }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/user/login') }}">Login</a></li>
                            <li><a href="{{ url('/user/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/user/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/user/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>

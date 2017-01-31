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
    {{ Html::meta('msapplication-TileColor', '#2B2D32') }}
    {{ Html::meta('msapplication-TileImage', url('images/favicon/mstile-144x144.png')) }}
    {{ Html::meta('msapplication-square70x70logo', url('images/favicon/mstile-70x70.png')) }}
    {{ Html::meta('msapplication-square150x150logo', url('images/favicon/mstile-150x150.png')) }}
    {{ Html::meta('msapplication-wide310x150logo', url('images/favicon/mstile-310x150.png')) }}
    {{ Html::meta('msapplication-square310x310logo', url('images/favicon/mstile-310x310.png')) }}
    {{ Html::meta('msapplication-notification', 'frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=engadget.dev/rss.xml&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=engadget.dev/rss.xml&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=engadget.dev/rss.xml&amp;id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=engadget.dev/rss.xml&amp;id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=engadget.dev/rss.xml&amp;id=5;cycle=1') }}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="Engadget" href="{{ url('/rss.xml') }}"/>
    @include('layouts.partials.favicons')
    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([ 'csrfToken' => csrf_token(), ]) !!};
    </script>
</head>
<body>
<div id="app">
    @include('layouts.partials.navigation')
    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>

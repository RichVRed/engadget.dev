@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <meta http-equiv="content-type" content="text/html" />

    <title>Engadget | Technology News, Advice and Features</title>
    <meta name="description" content="Engadget is a web magazine with obsessive daily coverage of everything new in gadgets and consumer electronics">
    <link rel="canonical" href="http://engadget.dev">

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
    <!-- Windows 8 Tiles -->
    <meta name="application-name" content="Engadget">
    <meta name="msapplication-TileImage" content="http://localhost/assets/images/apple-touch-icon-144x144.png">
    <meta name="msapplication-TileColor" content="#2B2D32">
    <!-- IE 11 Tile -->
    <meta name="msapplication-tooltip" content="Engadget">
    <meta name="msapplication-config" content="http://localhost/assets/xml/ieconfig.xml">

    <meta name="msapplication-TileColor" content="#2B2D32"/>
    <meta name="msapplication-TileImage" content="images/eng-e-558.png"/>
    <meta name="msapplication-square70x70logo" content="images/eng-e-128.png"/>
    <meta name="msapplication-square150x150logo" content="images/eng-e-270.png"/>
    <meta name="msapplication-wide310x150logo" content="images/eng-e-558x270.png"/>
    <meta name="msapplication-square310x310logo" content="images/eng-e-558.png"/>
    <meta name="msapplication-notification" content="frequency=30;polling-uri=https://notifications.buildmypinnedsite.com/?feed=https://www.engadget.com/rss.xml&amp;id=1;polling-uri2=https://notifications.buildmypinnedsite.com/?feed=https://www.engadget.com/rss.xml&amp;id=2;polling-uri3=https://notifications.buildmypinnedsite.com/?feed=https://www.engadget.com/rss.xml&amp;id=3;polling-uri4=https://notifications.buildmypinnedsite.com/?feed=https://www.engadget.com/rss.xml&amp;id=4;polling-uri5=https://notifications.buildmypinnedsite.com/?feed=https://www.engadget.com/rss.xml&amp;id=5; cycle=1"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="i3gxsAjOEqyHQgKDmwHN46kQkuL1iiQKRufM3vJ4">
    <title>Engadget</title>
    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="Engadget" href="http://engadget.dev/rss.xml"/>
    <!-- Apple -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('images/apple-touch-icon-57x57.png') }}"/>
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('images/apple-touch-icon-60x60.png') }}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('images/apple-touch-icon-72x72.png') }}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('images/apple-touch-icon-76x76.png') }}"/>
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('images/apple-touch-icon-114x114.png') }}"/>
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('images/apple-touch-icon-144x144.png') }}"/>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('images/apple-touch-icon-120x120.png') }}"/>
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('images/apple-touch-icon-152x152.png') }}"/>
    <!-- iOS 2.0+ Android 2.1+ -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ url('images/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ url('images/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('images/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ url('images/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('images/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('images/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ url('images/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ url('images/apple-touch-icon-152x152.png') }}" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ url('images/favicon-16x16.png" sizes="16x16') }}"/>
    <link rel="icon" type="image/png" href="{{ url('images/favicon-32x32.png" sizes="32x32') }}"/>
    <link rel="icon" type="image/png" href="{{ url('images/favicon-96x96.png" sizes="96x96') }}"/>
    <link rel="icon" type="image/png" href="{{ url('images/favicon-160x160.png" sizes="160x160') }}"/>
    <link rel="shortcut icon" type="image/png" href="{{ url('images/favicon-16x16.png" sizes="16x16') }}"/>
    <link rel="shortcut icon" type="image/png" href="{{ url('images/favicon-32x32.png" sizes="32x32') }}"/>
    <link rel="shortcut icon" type="image/png" href="{{ url('images/favicon-96x96.png" sizes="96x96') }}"/>
    <link rel="shortcut icon" type="image/png" href="{{  url('images/favicon-160x160.png" sizes="160x160') }}"/>

    <link rel="icon" type="image/png" href="{{ url('images/favicon-196x196.png') }}" sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ url('images/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ url('images/favicon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ url('images/favicon-16x16.png') }}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ url('images/favicon-128.png') }}" sizes="128x128" />
    <meta name="application-name" content="Engadget"/>
    <meta name="msapplication-TileColor" content="#2B2D32" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=localhost/rss.xml&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=localhost/rss.xml&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=localhost/rss.xml&amp;id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=localhost/rss.xml&amp;id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=localhost/rss.xml&amp;id=5;cycle=1" />

    <!-- Swifttype -->
    <meta class="swiftype" name="sections" data-type="string" content="">
    <meta class="swiftype" name="blogger_name" data-type="string" content="">
    <meta class="swiftype" name="blogger_slug" data-type="enum" content="">
    <meta class="swiftype" name="blogger_image" data-type="enum" content="">
    <meta class="swiftype" name="blogger_twitter" data-type="enum" content="">
    <meta class="swiftype" name="has_author" data-type="integer" content="1">
    <meta class="swiftype" name="type" data-type="enum" content="articles">
    <meta class="swiftype" name="content_type_id" data-type="enum" content="">
    <meta class="swiftype" name="title" data-type="string" content="">
    <meta class="swiftype" name="image" data-type="enum" content="">
    <meta class="swiftype" name="main_tag_label" data-type="string" content="">
    <meta class="swiftype" name="published_at" data-type="date" content="">
    <meta class="swiftype" name="thumbnail_url" data-type="enum" content="">
    <meta class="swiftype" name="autocomplete_thumbnail_url" data-type="enum" content="">
    <meta class="swiftype" name="url" data-type="enum" content="">
    <meta class="swiftype" name="dek" data-type="string" content="">
    <meta class="swiftype" name="channel" data-type="string" content="">
    <meta class="swiftype" name="has_video" data-type="integer" content="0">
    <meta class="swiftype" name="has_gallery" data-type="integer" content="0">
    <meta class="swiftype" name="has_video_and_gallery" data-type="integer" content="0">
    <meta class="swiftype" name="popularity" data-type="integer" content="">
    <meta class="swiftype" name="tags" data-type="string" content="">


    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {"csrfToken":"i3gxsAjOEqyHQgKDmwHN46kQkuL1iiQKRufM3vJ4"};
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
                <a class="navbar-brand" href="http://localhost">Engadget</a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="http://localhost/user/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default col-md-12">
                    <a href="http://localhost/user/forgot" class="btn-lg btn-link pull-right">Forgot username or password?</a>
                    <div class="panel-heading">LOGIN</div>
                    <div class="panel-body">
                        <form method="POST" action="http://localhost/user/login" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="i3gxsAjOEqyHQgKDmwHN46kQkuL1iiQKRufM3vJ4">
                            <input type="hidden" name="_token" value="i3gxsAjOEqyHQgKDmwHN46kQkuL1iiQKRufM3vJ4">
                            <div class="form-group">
                                <label for="email" class="col-md-12 col-md-offset-0">Username / Email</label>
                                <div class="col-md-12 col-md-offset-0">
                                    <input class="form-control" required="required" autofocus="autofocus" name="email" type="email" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-12 col-md-offset-0">Password</label>
                                <div class="col-md-12 col-md-offset-0">
                                    <input id="password" class="form-control" required="required" name="password" type="password" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit">Login</button>or
                                    <!-- Authentication Links -->
                                    <a href="http://localhost/social/login/redirect/facebook" class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="http://localhost/social/login/redirect/google" class="btn btn-social-icon btn-google"><span class="fa fa-google"></span></a>
                                    <a href="http://localhost/social/login/redirect/twitter" class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="http://localhost/social/login/redirect/reddit" class="btn btn-social-icon btn-reddit"><span class="fa fa-reddit"></span></a>
                                    <a href="http://localhost/social/login/redirect/linkedin" class="btn btn-social-icon btn-linkedin"><span class="fa fa-linkedin"></span></a>
                                    <a href="http://localhost/social/login/redirect/pinterest" class="btn btn-social-icon btn-pinterest"><span class="fa fa-pinterest"></span></a>
                                    <a href="http://localhost/social/login/redirect/instagram" class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a>
                                    <a href="http://localhost/social/login/redirect/yahoo" class="btn btn-social-icon btn-yahoo"><span class="fa fa-yahoo"></span></a>
                                    <a href="http://localhost/social/login/redirect/openid" class="btn btn-social-icon btn-openid"><span class="fa fa-openid"></span></a>
                                    <a href="http://localhost/social/login/redirect/tumblr" class="btn btn-social-icon btn-tumblr"><span class="fa fa-tumblr"></span></a>
                                </div>
                            </div>
                        </form>
                        <a href="http://localhost/user/register" class="btn btn-success">Sign Up</a>
                        Become a new member of the Engadget community now.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
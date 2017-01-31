<!-- 1 - Apple | 2 - iOS 2.0+ Android 2.1+ (precomposed) -->
@php
    $sizes = ['57', '60', '72', '76', '114', '120', '144', '152']
@endphp
@foreach ($sizes as $size)
    {{ Html::link("images/apple-touch-icon-${size}x${size}.png", '', ['sizes' => "${size}x${size}", 'rel' => 'apple-touch-icon'] ) }}
    {{ Html::link("images/apple-touch-icon-${size}x${size}.png", '', ['sizes' => "${size}x${size}", 'rel' => 'apple-touch-icon-precomposed'] ) }}
@endforeach
<!-- Favicon -->
@php
    $sizes = ['16', '32', '96', '160']
@endphp
@foreach ($sizes as $size)
    {{ Html::favicon("images/favicon-${size}x${size}.png", ['type' => 'image/png', 'sizes' => "${size}x${size}", 'rel' => 'icon'] ) }}
    {{ Html::favicon("images/favicon-${size}x${size}.png", ['type' => 'image/png', 'sizes' => "${size}x${size}"] ) }}
@endforeach
{{ Html::favicon('images/favicon-128.png',     ['type' => 'image/png', 'sizes' => '128x128', 'rel' => 'icon'] ) }}
{{ Html::favicon('images/favicon-196x196.png', ['type' => 'image/png', 'sizes' => '196x196', 'rel' => 'icon'] ) }}

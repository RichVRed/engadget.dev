<!-- Authentication Links -->
@php
    $social = ['facebook', 'google', 'twitter', 'reddit', 'linkedin', 'pinterest', 'instagram', 'yahoo', 'openid', 'tumblr'];
@endphp
@foreach($social as $company)
    {{ Html::link("social/login/redirect/${company}", Html::tag('span', '', ['class' => "fa fa-${company}"]), ['class' => "btn btn-social-icon btn-${company}"], null, false) }}
@endforeach
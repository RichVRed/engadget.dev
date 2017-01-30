<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
    # https://developers.facebook.com/apps
    'facebook' => [
        'client_id' => env('FACEBOOK_APPLICATION_ID'),
        'client_secret' => env('FACEBOOK_SECRET'),
        'admin_id' => env('FACEBOOK_ADMIN_ID'),
        'redirect' => env('FACEBOOK_AUTHORIZED_CALLBACK'),
    ],
    # http://console.developers.google.com
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_AUTHORIZED_CALLBACK'),
        'recaptcha_id' => env('NOCAPTCHA_SITEKEY'),
        'recaptcha_secret' => env('NOCAPTCHA_SECRET'),
    ],
    'instagram' => [
        'client_id' => env('INSTAGRAM_KEY'),
        'client_secret' => env('INSTAGRAM_SECRET'),
        'redirect' => env('INSTAGRAM_REDIRECT_URI'),
    ],
    # https://www.linkedin.com/developer/apps
    'linkedin' => [
        'client_id' => env('LINKEDIN_KEY'),
        'client_secret' => env('LINKEDIN_SECRET'),
        'redirect' => env('LINKEDIN_REDIRECT_URI'),
    ],
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],
    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],
    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],
    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    # https://apps.twitter.com
    'twitter' => [
        'client_id' => env('TWITTER_CONSUMER_KEY'),
        'client_secret' => env('TWITTER_CONSUMER_SECRET'),
        'redirect' => env('TWITTER_AUTHORIZED_CALLBACK'),
    ],
];

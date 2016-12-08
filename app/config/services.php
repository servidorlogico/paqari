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
    
    'facebook' => [
    'client_id' => '235747620190537',
    'client_secret' => '1d73ddc9d71439f3adda26b6ae3f79bd',
    'redirect' => 'http://paqari-u201319421.c9users.io/auth/facebook/callback',
    ],
    'google' => [
    'client_id' => '58121036335-1jrcfodogi56nfl80j93avu4sbt22jql.apps.googleusercontent.com',
    'client_secret' => 'oG8_RCURjffDbHLgHAhfOOUp',
    'redirect' => 'http://paqari-u201319421.c9users.io/auth/google/callback',
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

];

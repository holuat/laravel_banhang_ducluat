<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '5278096278871123',  //client face của bạn
        'client_secret' => '2d81df655235dbd6b388027068c54473',  //client app service face của bạn
        'redirect' => 'https://ducluat.com/admin/callback' //callback trả về
    ],
    'google' => [
        'client_id' => '989891757686-5kb6bhdj5niqpo3dq8aenmcepd08fear.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://ducluat.com/google/callback' 
    ],



];

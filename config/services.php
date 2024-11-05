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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'qls_api' => [
        'user' => env('QLS_API_USER', 'frits@test.qlsnet.nl'),
        'pass' => env('QLS_API_PASS', '4QJW9yh94PbTcpJGdKz6egwH'),
        'base_url' => env('QLS_API_BASE_URL', 'https://api.pakketdienstqls.nl'),
        'companyId' => env('QLS_API_COMPANY_ID', '9e606e6b-44a4-4a4e-a309-cc70ddd3a103'),
        'brandId' => env('QLS_API_BRAND_ID', 'e41c8d26-bdfd-4999-9086-e5939d67ae28')
    ]

];

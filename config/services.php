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
	
	'facebook' => [
		'client_id' => '182361319015457',         // Your GitHub Client ID
		'client_secret' => 'c45b62c1015300fbe8a69d4bc5eae4b8', // Your GitHub Client Secret
		'redirect' => 'http://localhost:8000/login/fb/callback',
	],
	
	'google' => [
		'client_id' => '248867786119-5dsc86id1la27kvm0f1b0qk2i7ui8kmc.apps.googleusercontent.com',         // Your GitHub Client ID
		'client_secret' => 'tfe_UsNGQrvkv3UAyeRuOAKa', // Your GitHub Client Secret
		'redirect' => 'http://localhost:8000/login/google/callback',
	],

];

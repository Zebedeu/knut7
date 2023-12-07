<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Knut7'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. (local | test | production)
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Control Panel
    |--------------------------------------------------------------------------
    |
    | This value is the endpoint name of control panel for your application.
    |
    */

    'admin' => env('ADMIN_FOLDER', 'admin'),

    /*
    |--------------------------------------------------------------------------
    | Application Assets Folder
    |--------------------------------------------------------------------------
    |
    | This value is the endpoint name of assets directory for your application.
    |
    */

    'assets' => env('ASSETS_FOLDER', 'assets'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY', ''),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => env('TIMEZONE', 'Europe/Istanbul'),

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Default HTTP Schema
    |--------------------------------------------------------------------------
    |
    | This value is http schema of your application.
    | If it's true, http schema will be 'https'
    |
    */

    'https' => env('HTTPS', false),

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
        * Knut7 Framework Service Providers...
        */
        Ballybran\Providers\Auth::class,
        Ballybran\Providers\Blade::class,
        // Ballybran\\Ballybran\Providers\Cache::class,
        Ballybran\Providers\Database::class,
        Ballybran\Providers\Hash::class,
        Ballybran\Providers\Mail::class,
        // Ballybran\\Ballybran\Providers\Translation::class,

        /*
        * Application Service Providers...
        */
        App\Providers\AppServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'Auth'        => Ballybran\Facades\Auth::class,
        // 'Cache'    => Ballybran\\Ballybran\Facades\Cache::class,
        'Config'      => Ballybran\Facades\Config::class,
        'DB'          => Ballybran\Facades\DB::class,
        'Hash'        => Ballybran\Facades\Hash::class,
        'Jwt'         => Ballybran\Facades\Jwt::class,
        'Mail'        => Ballybran\Facades\Mail::class,

    ],

];

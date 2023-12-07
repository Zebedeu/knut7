<?php


return [

    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     */
    'middleware' => [
        // \Ballybran\Http\Middleware\CorsMiddleware::class,
        \Ballybran\Http\Middleware\TrimStrings::class,
        \Ballybran\Http\Middleware\ConvertEmptyStringsToNull::class,
        
    ],

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     */
    'routeMiddleware' => [
        'auth' => \Ballybran\Http\Middleware\AuthMiddleware::class,
        'auth.jwt' => \Ballybran\Http\Middleware\JwtMiddleware::class,
    ],

    /**
     * The application's route middleware groups.
     */
    'middlewareGroup' => [

        'web' => [
            // \Ballybran\Http\Middleware\CsrfMiddleware::class,
        ],

        'api' => [
            'auth.jwt',
        ],

    ],

];

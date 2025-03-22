<?php

namespace App\Http;

use App\Http\Middleware\adminUser;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        // Global middleware
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Other middlewares...
        'adminUser' => \App\Http\Middleware\adminUser::class,
        'islogged' => \App\Http\Middleware\islogged::class,
    ];
}

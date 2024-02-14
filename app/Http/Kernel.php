<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // другие middleware
        \App\Http\Middleware\CorsMiddleware::class,
    ];
}

<?php

use App\Http\Middleware\AdminLoginMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Http;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminLoginMiddleware::class,
            'admin_register' => \App\Http\Middleware\AdminRegisterMiddleware::class,
            'user_update' => \App\Http\Middleware\UserUpdateMiddleware::class,
            'comment' => \App\Http\Middleware\CommentMiddleware::class,
        ]);
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

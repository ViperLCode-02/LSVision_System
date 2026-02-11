<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CheckRole; // Import your middleware

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Register middleware aliases (Laravel 12 way)
        $middleware->alias([
            'role' => CheckRole::class,
            // Add other middleware aliases here if needed
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
<?php

// config/application.php or wherever your application configuration is defined


use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckLogin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php', // Point to the web routes file
        commands: __DIR__ . '/../routes/console.php', // Point to the console routes file
        health: '/up', // Health check route for your application
    )
    ->withMiddleware(function ($middleware) {
        $middleware->alias([
            'checkAdmin' => CheckAdmin::class, // Alias for the CheckAdmin middleware
            'auth.alert' => CheckLogin::class, // Register the middleware alias
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Handle application exceptions (customize if needed)
    })
    ->create();

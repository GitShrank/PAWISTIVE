<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // Global HTTP middleware stack.
  
    protected $middlewareGroups = [
        
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \Stancl\Tenancy\Middleware\InitializeTenancyByDomain::class,
             \Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
        ],
        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];
    

    // Route middleware.
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        // Other middleware...
        'tenancy' => \Stancl\Tenancy\Middleware\InitializeTenancyByDomain::class,
        'preventAccessFromCentralDomains' => \Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains::class,
    ];
}

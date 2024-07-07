<?php

use Illuminate\Support\Facades\Route;

Route::middleware([
    'web',
    \Stancl\Tenancy\Middleware\InitializeTenancyByDomain::class,
    \Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/test-tenancy', function () {
        return 'This is a tenant route';
    });
    // Add more tenant routes here
});

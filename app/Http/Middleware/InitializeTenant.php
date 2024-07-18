<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Tenant;

class InitializeTenant
{
    public function handle(Request $request, Closure $next)
    {
        $host = $request->getHost();
        $subdomain = explode('.', $host)[0]; // Assuming the subdomain is the first part of the host

        $tenant = Tenant::find($subdomain);

        if (!$tenant) {
            abort(404, 'Tenant not found');
        }

        app()->instance('tenant', $tenant); // Register the tenant instance in the container

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stancl\Tenancy\Resolvers\DomainTenantResolver;

class EnsureTenant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $tenant = tenancy()->tenant;
        $user = Auth::user();

        if ($user && $user->tenant_id !== $tenant->id) {
            Auth::logout();
            return redirect('/login')->withErrors(['email' => 'Unauthorized access to this tenant.']);
        }

        return $next($request);
    }
}

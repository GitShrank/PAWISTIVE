<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        $tenant = app('tenant');
        return redirect()->route('tenant.dashboard', ['tenant' => $tenant->id]);
    }
}

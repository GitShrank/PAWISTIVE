<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stancl\Tenancy\Facades\Tenancy;

class DashboardController extends Controller
{
    public function index()
    {
        $tenant = tenant(); // Get the current tenant

        return view('dashboard', ['tenant' => $tenant]);
    }
}

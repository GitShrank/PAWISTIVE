<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stancl\Tenancy\Facades\Tenancy;

class DashboardController extends Controller
{
    public function index()
    {
        $tenant = tenancy()->tenant;  // Using the tenancy() helper to get the current tenant
        $tenantName = $tenant->id;

        // Construct the view path correctly
        $view = "tenant.{$tenantName}.dashboard";

        return view($view, compact('tenantName'));
    }
}





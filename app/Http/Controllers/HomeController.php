<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard'); // Ensure you have a view named 'dashboard.blade.php' in the 'resources/views' directory
    }
}

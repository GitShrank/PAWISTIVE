<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pawsitive - Tenant 2</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/tenant2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .bg-tenant2 { background-color: #DC2626; } /* Red shade */
        .sidebar { background-color: #B91C1C; color: white; min-height: 100vh; }
        .sidebar a { color: white; padding: 10px 20px; display: block; text-decoration: none; }
        .sidebar a:hover { background-color: #991B1B; }
        .content { margin-left: 250px; padding: 20px; }
        .header { background-color: #B91C1C; color: white; padding: 10px 20px; display: flex; justify-content: space-between; align-items: center; }
        .profile-dropdown { position: relative; display: inline-block; }
        .profile-dropdown-content { display: none; position: absolute; right: 0; background-color: white; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); z-index: 1; }
        .profile-dropdown:hover .profile-dropdown-content { display: block; }
        .profile-dropdown-content a { color: black; padding: 12px 16px; text-decoration: none; display: block; }
        .profile-dropdown-content a:hover { background-color: #f1f1f1; }
        .card { background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
    </style>
</head>
<body class="antialiased bg-tenant2">
    <div class="flex">
        <nav class="sidebar">
            <div class="px-6 py-4">
                <img src="{{ asset('pawsitive.png') }}" alt="Pawsitive Logo" class="h-10 mr-2">
            </div>
            <ul>
                <li><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-user-plus"></i> Client Registration</a></li>
                <li><a href="#"><i class="fas fa-paw"></i> Animal Registration</a></li>
            </ul>
        </nav>
        <div class="w-full">
            <header class="header">
                <div>Pawsitive</div>
                <div class="profile-dropdown">
                    <span>{{ Auth::user()->name }}</span>
                    <div class="profile-dropdown-content">
                        <a href="{{ route('profile.edit') }}">Profile</a>
                        <a href="{{ route('settings') }}">Settings</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2">Log Out</button>
                        </form>
                    </div>
                </div>
            </header>
            <main class="content">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>

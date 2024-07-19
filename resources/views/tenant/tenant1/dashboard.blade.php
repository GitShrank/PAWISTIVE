<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tenant 1 Dashboard</title>
    @vite('resources/css/app.css')
    <style>
        .bg-tenant1 {
            background-color: #1E40AF;
        }
        .sidebar {
            background-color: #1E3A8A;
            color: white;
            min-height: 100vh;
        }
        .sidebar a {
            color: white;
            padding: 10px 20px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #374151;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .header {
            background-color: #1E3A8A;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .profile-dropdown {
            position: relative;
            display: inline-block;
        }
        .profile-dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: white;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }
        .profile-dropdown:hover .profile-dropdown-content {
            display: block;
        }
        .profile-dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .profile-dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="antialiased bg-tenant1">
    <div class="flex">
        <nav class="sidebar">
            <div class="px-6 py-4">
            <img src="{{ asset('pawsitive.png') }}" alt="Pawsitive Logo" class="h-10 mr-2">
            </div>
            <ul>
                <li><a href="{{ route('dashboard') }}">Home</a></li>
                <li><a href="#">Client Registration</a></li>
                <li><a href="#">Animal Registration</a></li>
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
                <div class="card">
                    <h1 class="text-2xl font-bold mb-4">Dashboard for Tenant 1</h1>
                    <p class="mb-4">Welcome to Tenant 1's dashboard!</p>
                </div>
            </main>
        </div>
    </div>
</body>
</html>

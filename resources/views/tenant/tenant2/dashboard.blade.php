<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pawsitive</title>
    @vite('resources/css/app.css')
    <style>
        .bg-tenant2 {
            background-color: #1E1E2F; /* Dark background color */
        }
        .sidebar {
            background-color: #2D2D44; /* Darker sidebar color */
            color: white;
            min-height: 100vh;
            width: 200px;
        }
        .sidebar a {
            color: white;
            padding: 10px 20px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #3E3E5B; /* Lighter hover color */
        }
        .content {
            margin-left: 200px;
            padding: 20px;
        }
        .header {
            background-color: #2D2D44; /* Match sidebar color */
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
            background-color: #2D2D44; /* Dark card background */
            color: white; /* Light text color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .logo img {
            height: 40px;
        }
        .card img {
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="antialiased bg-tenant2">
    <div class="flex">
        <nav class="sidebar">
            <div class="px-6 py-4 logo">
                <img src="{{ asset('pawsitive.png') }}" alt="Pawsitive Logo">
                <span>Pawsitive</span>
            </div>
            <ul>
                <li><a href="{{ route('dashboard') }}">Home</a></li>
                <li><a href="#">Client Registration</a></li>
                <li><a href="#">Animal Registration</a></li>
            </ul>
        </nav>
        <div class="w-full">
            <header class="header">
                <div></div> <!-- Empty div to balance the flex layout -->
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
                    <h1 class="text-2xl font-bold mb-4">Hello PAW</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <img src="{{ asset('vet.jpg') }}" alt="Vet Image" class="w-full h-auto rounded-lg shadow-md">
                </div>
            </main>
        </div>
    </div>
</body>
</html>

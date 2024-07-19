<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    @if($tenant->id === 'tenant1')
        <link rel="stylesheet" href="{{ asset('css/tenant1.css') }}">
        <img src="{{ asset('pawsitive.png') }}" alt="Pawsitive Logo" class="h-10 mr-2">
    @elseif($tenant->id === 'tenant2')
        <link rel="stylesheet" href="{{ asset('css/tenant2.css') }}">
        <img src="{{ asset('pawsitive.png') }}" alt="Pawsitive Logo" class="h-10 mr-2">
    @else
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <img src="{{ asset('pawsitive.png') }}" alt="Pawsitive Logo" class="h-10 mr-2">
    @endif
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex">
        <nav class="w-1/4 bg-gray-800 text-white p-4">
            <div class="flex items-center mb-4">
                <img src="{{ asset('pawsitive.png') }}" alt="Pawsitive Logo" class="h-10 mr-2">
                <span class="text-xl font-bold">PAWSITIVE</span>
            </div>
            <ul>
                <li class="mb-2"><a href="{{ route('dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Home</a></li>
                <li class="mb-2"><a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Client Registration</a></li>
                <li class="mb-2"><a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Animal Registration</a></li>
            </ul>
        </nav>
        <div class="w-3/4 p-6">
            <header class="flex justify-end mb-4">
                <div class="relative">
                    <button class="block focus:outline-none">
                        <span class="text-white">{{ Auth::user()->name }}</span>
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-gray-200">Log Out</button>
                        </form>
                    </div>
                </div>
            </header>
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>

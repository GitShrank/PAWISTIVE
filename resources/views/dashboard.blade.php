<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pawsitive Dashboard</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @if($tenant->id === 'tenant1')
        <link rel="stylesheet" href="{{ mix('css/tenant1.css') }}">
    @elseif($tenant->id === 'tenant2')
        <link rel="stylesheet" href="{{ mix('css/tenant2.css') }}">
    @else
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @endif
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col">
        <nav class="bg-gray-800 text-white">
            <div class="container mx-auto px-6 py-4 flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ asset('pawsitive.png') }}" alt="Pawsitive Logo" class="h-10 w-10">
                    <span class="ml-3 text-xl font-bold">Pawsitive</span>
                </div>
                <div class="flex items-center">
                    <span class="mr-4">{{ Auth::user()->name }}</span>
                    <div class="relative">
                        <button class="relative z-10 block h-8 w-8 rounded-full overflow-hidden border-2 border-gray-600 focus:outline-none focus:border-white">
                            <img class="h-full w-full object-cover" src="https://i.pravatar.cc/32" alt="Avatar">
                        </button>
                        <div class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-lg shadow-xl">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="flex flex-1">
            <aside class="w-64 bg-gray-800 text-white">
                <div class="py-4 px-6">
                    <nav class="space-y-1">
                        <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-700">Home</a>
                        <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-700">Client Registration</a>
                        <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-700">Animal Registration</a>
                    </nav>
                </div>
            </aside>
            <main class="flex-1 bg-white p-6">
                <div class="container mx-auto">
                    <div class="bg-gray-200 p-4 rounded-lg shadow-lg">
                        <h1 class="text-2xl font-bold mb-4">Dashboard for {{ $tenant->id }}</h1>
                        <p class="mb-4">Welcome to {{ $tenant->id }}'s dashboard!</p>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

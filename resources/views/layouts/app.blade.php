<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Pawsitive') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-900 antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                    {{ $header }}
                </h1>
            </div>
        </header>

        <!-- Sidebar and Content -->
        <div class="flex flex-1 overflow-hidden">
            <!-- Sidebar -->
            <aside class="w-64 bg-white dark:bg-gray-800 shadow-lg p-4">
                <nav class="space-y-2">
                    <a href="{{ route('dashboard') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-white">
                        Dashboard
                    </a>
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-white">
                        Profile
                    </a>
                    <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-white">
                        Settings
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-white">
                            Log Out
                        </button>
                    </form>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>

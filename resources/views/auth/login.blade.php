<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pawsitive Login</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .bg-login {
            background-image: url('{{ asset('bg.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            color: white;
            max-width: 500px;
            width: 100%;
        }
        .login-logo {
            height: 120px;
            margin-bottom: 20px;
        }
        .login-form input[type="email"],
        .login-form input[type="password"] {
            background: rgba(255, 255, 255, 0.8);
            border: none;
            padding: 15px;
            width: 100%;
            margin-bottom: 15px;
            border-radius: 8px;
            font-size: 16px;
            color: black;
        }
        .login-form button {
            background: #1E3A8A;
            color: white;
            border: none;
            padding: 18px;
            width: 25%;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            
        }
        .login-form button:hover {
            background: #3746A3;
        }
        .login-form a {
            color: #E5E7EB;
            text-decoration: none;
        }
        .login-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="bg-login">
    <div class="login-container">
        <div class="text-center">
            <img src="{{ asset('pawsitive.png') }}" alt="Pawsitive Logo" class="login-logo">
        </div>
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <div>
                <label for="email" class="block font-medium text-sm text-gray-300">Email</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <label for="password" class="block font-medium text-sm text-gray-300">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-300">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-300 hover:text-gray-400" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif

                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-600 disabled:opacity-25 transition">
                    Log in
                </button>
            </div>
        </form>
    </div>
</body>
</html>

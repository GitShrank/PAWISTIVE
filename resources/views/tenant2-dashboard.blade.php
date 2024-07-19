@extends('layouts.tenant1-layout')

@section('content')
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
            <div class="card">
                <h1 class="text-2xl font-bold mb-4">{{ __('dashboard.title', ['tenant' => 'Tenant 1']) }}</h1>
                <p class="mb-4">{{ __('dashboard.welcome', ['tenant' => 'Tenant 1']) }}</p>
                <img src="{{ asset('vet.png') }}" alt="Vet Image" class="w-full rounded-lg">
            </div>
        </main>
    </div>
</div>
@endsection

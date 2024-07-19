@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Dashboard for {{ $tenant->id }}</h1>
        <p class="mb-4">Welcome to {{ $tenant->id }}'s dashboard!</p>
    </div>
</div>
@endsection

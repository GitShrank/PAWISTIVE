<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'This is the central domain.';
});

require __DIR__.'/auth.php';

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

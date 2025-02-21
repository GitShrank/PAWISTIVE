<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());
        return redirect()->route('profile.edit')->with('status', 'Profile updated!');
    }

    public function destroy()
    {
        $user = Auth::user();
        $user->delete();
        return redirect('/')->with('status', 'Profile deleted!');
    }
}

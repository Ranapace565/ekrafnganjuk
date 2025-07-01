<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Cari atau buat user
        $user = User::firstOrCreate([
            'email' => $googleUser->getEmail(),
        ], [
            'name' => $googleUser->getName(),
            'password' => bcrypt('google-oauth-password'),
            'role' => 'visitor_logged',
            'email_verified_at' => now(),
        ]);

        Auth::login($user);

        switch ($user->role) {
            case 'admin':
                return redirect('/admin/dashboard');
            case 'entrepreneur':
                return redirect('/entrepreneur/home');
            case 'visitor_logged':
            default:
                return redirect('/beranda');
        }
    }
}

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
                return redirect('/admin')->with(['success' => 'Anda telah berhasil masuk sebagai admin']);
            case 'entrepreneur':
                return redirect('/entrepreneur')->with(['success' => 'Anda telah berhasil masuk sebagai pengusaha']);
            case 'visitor_logged':
                return redirect('/beranda')->with(['success' => 'Anda telah berhasil masuk sebagai pengunjung terdaftar']);
            default:
                return redirect('/beranda');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Logout dari sesi auth

        $request->session()->invalidate(); // Invalidate session
        $request->session()->regenerateToken(); // Regenerate CSRF token

        return redirect('/beranda')->with(['success' => 'Anda telah berhasil keluar']); // Arahkan ke halaman utama atau login
    }
}

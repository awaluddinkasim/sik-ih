<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('auth');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $creds = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'remember' => 'nullable',
        ]);

        $remember = $request->remember ? true : false;

        if (Auth::attempt(['email' => $creds['email'], 'password' => $creds['password']], $remember)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return $this->redirectBack('error', 'Email atau Password salah', true);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $this->redirect(route('login'), 'success', 'Logout berhasil');
    }
}

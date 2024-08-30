<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index(): View
    {
        return view('pages.profile');
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
        ]);

        if ($data['password']) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $admin = Admin::find(Auth::user()->id);
        $admin->update($data);

        return $this->redirectBack('success', 'Profil berhasil diperbarui');
    }
}

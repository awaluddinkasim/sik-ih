<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('pages.user.index', [
            'users' => User::all(),
        ]);
    }

    public function edit(User $user): View
    {
        return view('pages.user.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'nullable',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'no_hp' => 'required',
            'riwayat_kesehatan' => 'nullable',
        ]);

        if ($data['password']) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return $this->redirect(route('user.list'), 'success', 'Update data pengguna berhasil');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $this->redirectBack('success', 'Pengguna berhasil di hapus');
    }
}

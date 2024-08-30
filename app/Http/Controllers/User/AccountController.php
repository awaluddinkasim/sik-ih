<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function get(Request $request): JsonResponse
    {
        return $this->jsonSuccess([
            'user' => new UserResource($request->user()),
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'no_hp' => 'required',
            'riwayat_kesehatan' => 'nullable',
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        return $this->jsonSuccess([
            'user' => new UserResource($user),
        ]);
    }

    public function update(Request $request): JsonResponse
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

        $request->user()->update($data);

        return $this->jsonSuccess([
            'user' => new UserResource($request->user()),
        ]);
    }
}

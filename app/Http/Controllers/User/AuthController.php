<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (!Auth::guard('user')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return $this->jsonError('Email atau Password salah', 401);
        }

        $user = User::find(Auth::guard('user')->user()->id);

        return $this->jsonSuccess([
            'user' => new UserResource($user),
            'token' => $user->createToken('auth-token')->plainTextToken,
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return $this->jsonSuccess([]);
    }
}

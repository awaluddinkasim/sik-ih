<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

abstract class Controller
{
    public function redirect($to, $status, $message): RedirectResponse
    {
        return redirect($to)->with($status, $message);
    }

    public function redirectBack($status, $message, $withInput = false): RedirectResponse
    {
        if ($withInput) {
            return redirect()->back()->with($status, $message)->withInput();
        }

        return back()->with($status, $message);
    }

    public function jsonSuccess($data): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil',
            ...$data
        ], 200);
    }

    public function jsonError($message = 'Gagal', $code = 500, $data = []): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            ...$data
        ], $code);
    }
}

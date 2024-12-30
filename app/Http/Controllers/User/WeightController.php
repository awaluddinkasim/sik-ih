<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Weight;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    public function get(Request $request): JsonResponse
    {
        $kehamilan = $request->user()->kehamilan->id;

        $weights = Weight::where('pregnancy_id', $kehamilan)->get();

        return $this->jsonSuccess([
            'weights' => $weights,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $kehamilan = $request->user()->kehamilan->id;

        $weight = Weight::create([
            'pregnancy_id' => $kehamilan,
            'berat_badan' => $request->berat_badan,
            'tanggal' => $request->tanggal,
        ]);

        return $this->jsonSuccess([
            'weight' => $weight,
        ]);
    }

    public function delete(Weight $weight): JsonResponse
    {
        $weight->delete();

        return $this->jsonSuccess([]);
    }
}

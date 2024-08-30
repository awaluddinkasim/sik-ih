<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\PregnancyResource;
use App\Models\Pregnancy;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PregnancyController extends Controller
{
    public function get(Request $request): JsonResponse
    {
        $pregnancy = Pregnancy::where('user_id', $request->user()->id)->where('is_active', true)->first();

        if (!$pregnancy) $pregnancy = null;
        else $pregnancy = new PregnancyResource($pregnancy);

        return $this->jsonSuccess([
            'pregnancy' => $pregnancy,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'tanggal_hari_pertama_haid_terakhir' => 'required|date',
        ]);

        $data['user_id'] = $request->user()->id;
        $data['perkiraan_tanggal_persalinan'] = calculateDueDate(Carbon::parse($data['tanggal_hari_pertama_haid_terakhir']));
        $data['usia_kehamilan'] = calculateGestationalAge(Carbon::parse($data['tanggal_hari_pertama_haid_terakhir']));
        if ($data['perkiraan_tanggal_persalinan'] < Carbon::now()) {
            $data['is_active'] = false;
        } else {
            $data['is_active'] = true;
        }

        $pregnancy = Pregnancy::create($data);

        return $this->jsonSuccess([
            'pregnancy' => new PregnancyResource($pregnancy),
        ]);
    }
}

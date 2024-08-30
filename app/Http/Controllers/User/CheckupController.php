<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\CheckupResource;
use App\Models\Checkup;
use App\Models\Pregnancy;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CheckupController extends Controller
{
    public function get(Pregnancy $pregnancy): JsonResponse
    {
        return $this->jsonSuccess([
            'checkups' => CheckupResource::collection(Checkup::where('pregnancy_id', $pregnancy->id)->get()),
        ]);
    }
}

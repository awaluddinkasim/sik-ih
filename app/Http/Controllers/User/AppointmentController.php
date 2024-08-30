<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppointmentResource;
use App\Models\Appointment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function get(Request $request): JsonResponse
    {
        $user = $request->user();

        return $this->jsonSuccess([
            'appointments' => AppointmentResource::collection($user->konsultasi),
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $checkPending = Appointment::where('user_id', $request->user()->id)->where('status', 'pending')->first();
        if ($checkPending) {
            return $this->jsonError('Anda sudah pernah mengajukan konsultasi', 400);
        }

        $checkConfirmed = Appointment::where('user_id', $request->user()->id)->where('status', 'confirmed')->first();
        if ($checkConfirmed) {
            return $this->jsonError('Anda sudah pernah mengajukan konsultasi dan telah dikonfirmasi', 400);
        }

        $data = $request->validate([
            'tanggal_appointment' => 'required|date',
            'tujuan' => 'required',
        ]);

        $data['user_id'] = $request->user()->id;
        $data['status'] = 'pending';

        Appointment::create($data);

        $user = $request->user();

        return $this->jsonSuccess([
            'appointments' => AppointmentResource::collection($user->konsultasi),
        ]);
    }
}

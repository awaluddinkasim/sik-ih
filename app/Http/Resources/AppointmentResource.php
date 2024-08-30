<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'tanggal_appointment' => $this->tanggal_appointment,
            'tujuan' => $this->tujuan,
            'status' => $this->status
        ];
    }
}

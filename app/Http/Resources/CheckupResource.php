<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CheckupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'tanggal_pemeriksaan' => $this->tanggal_pemeriksaan,
            'berat_badan' => $this->berat_badan,
            'tekanan_darah_sistol' => $this->tekanan_darah_sistol,
            'tekanan_darah_diastol' => $this->tekanan_darah_diastol,
            'catatan' => $this->catatan
        ];
    }
}

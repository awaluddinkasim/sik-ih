<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PregnancyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tanggal_hari_pertama_haid_terakhir' => $this->tanggal_hari_pertama_haid_terakhir,
            'perkiraan_tanggal_persalinan' => $this->perkiraan_tanggal_persalinan,
            'usia_kehamilan' => $this->usia_kehamilan,
            'is_active' => $this->is_active
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nama' => $this->nama,
            'email' => $this->email,
            'tgl_lahir' => $this->tgl_lahir,
            'alamat' => $this->alamat,
            'no_hp' => $this->no_hp,
            'riwayat_kesehatan' => $this->riwayat_kesehatan,
        ];
    }
}

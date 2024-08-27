<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Checkup extends Model
{
    use HasFactory;

    protected $fillable = [
        'pregnancy_id',
        'tanggal_pemeriksaan',
        'berat_badan',
        'tekanan_darah_sistol',
        'tekanan_darah_diastol',
        'tinggi_fundus_uteri',
        'catatan',
    ];

    public function ulid(): Attribute
    {
        return new Attribute(
            set: fn() => Str::ulid(),
        );
    }

    public function pregnancy(): BelongsTo
    {
        return $this->belongsTo(Pregrancy::class);
    }
}

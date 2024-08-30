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
        'ulid',
        'pregnancy_id',
        'tanggal_pemeriksaan',
        'berat_badan',
        'tekanan_darah_sistol',
        'tekanan_darah_diastol',
        'catatan',
    ];

    public static function boot(): void
    {
        parent::boot();
        self::creating(function ($model) {
            $model->ulid = Str::ulid();
        });
    }

    public function kehamilan(): BelongsTo
    {
        return $this->belongsTo(Pregnancy::class, 'pregnancy_id');
    }
}

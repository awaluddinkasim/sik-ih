<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pregnancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'ulid',
        'user_id',
        'is_active',
        'usia_kehamilan',
        'perkiraan_tanggal_persalinan',
        'tanggal_hari_pertama_haid_terakhir',
    ];

    public static function boot(): void
    {
        parent::boot();
        self::creating(function ($model) {
            $model->ulid = Str::ulid();
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function checkups(): HasMany
    {
        return $this->hasMany(Checkup::class);
    }
}

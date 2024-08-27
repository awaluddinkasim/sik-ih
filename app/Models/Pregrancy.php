<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pregrancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'is_active',
        'usia_kehamilan',
        'perkiraan_tanggal_persalinan',
        'tanggal_hari_pertama_haid_terakhir',
    ];

    public function ulid(): Attribute
    {
        return new Attribute(
            set: fn() => Str::ulid(),
        );
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

<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'ulid',
        'gambar',
        'judul',
        'konten',
    ];

    public static function boot(): void
    {
        parent::boot();
        self::creating(function ($model) {
            $model->ulid = Str::ulid();
        });
    }
}

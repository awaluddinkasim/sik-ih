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
        'gambar',
        'judul',
        'konten',
    ];

    public function ulid(): Attribute
    {
        return new Attribute(
            set: fn() => Str::ulid(),
        );
    }
}

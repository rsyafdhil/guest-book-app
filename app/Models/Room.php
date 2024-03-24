<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Room extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
        'kuota',
        'available_start',
        'available_end',
        'tanggal',
        'waktu'
    ];

    public function timeSelector()
    {
        return $this->hasMany(TimeSelector::class);
    }

    public function guest()
    {
        return $this->hasMany(Guest::class);
    }
}

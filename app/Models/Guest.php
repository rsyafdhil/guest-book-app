<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nomor_telp',
        'keperluan',
        'room_id',
        'tanggal_tamu',
        'selection_id'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function timeSelector()
    {
        return $this->belongsTo(TimeSelector::class);
    }
}

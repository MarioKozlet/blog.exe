<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'id',
        'user_id',
        'nama_aktivitas',
        'tgl',
        'tempat',
        'pj',
        'biaya',
    ];
}

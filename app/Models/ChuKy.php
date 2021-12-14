<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuKy extends Model
{
    use HasFactory;

    protected $fillable = [
        'loai_chu_ky',
        'STT',
        'ten_chu_ky',
        'tu_ngay',
        'den_ngay',
        'mo_ta',
    ];
}

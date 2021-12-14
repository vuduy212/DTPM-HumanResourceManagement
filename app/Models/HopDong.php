<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HopDong extends Model
{
    use HasFactory;

    protected $fillable = [
        'ma_nhan_su',
        'tu_ngay',
        'den_ngay',
        'mo_ta',
    ];
}

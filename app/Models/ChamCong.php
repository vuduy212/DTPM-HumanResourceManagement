<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChamCong extends Model
{
    use HasFactory;

    protected $fillable = [
        'ma_nhan_su',
        'ma_chu_ky',
        'ma_kt_kl',
        'mo_ta',
    ];
}

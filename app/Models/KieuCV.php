<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KieuCV extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_kieu_cv',
        'mo_ta',
    ];
}

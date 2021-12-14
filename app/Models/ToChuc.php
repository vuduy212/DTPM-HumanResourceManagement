<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToChuc extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_to_chuc',
        'mo_ta',
        'nguoi_lanh_dao',
        'ma_to_chuc_cha',
    ];
}

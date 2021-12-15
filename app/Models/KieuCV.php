<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KieuCV extends Model
{
    use HasFactory;

    protected $table = 'kieu_cvs';

    protected $fillable = [
        'ten_kieu_cv',
        'mo_ta',
    ];
}

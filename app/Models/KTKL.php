<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KTKL extends Model
{
    use HasFactory;

    protected $table = 'kt_kls';

    protected $fillable = [
        'loai_kt_kl',
        'STT',
        'ten',
        'mo_ta',
    ];
}

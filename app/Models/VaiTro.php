<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class VaiTro extends Model
{
    use HasFactory;

    protected $fillable = [
        'ma_vai_tro',
        'ma_to_chuc',
        'ten_vai_tro',
        'mo_ta',
        'muc_luong'
    ];

    public function nhan_sus()
    {
        return $this->belongsToMany(NhanSu::class, 'ns_vt', 'ma_vai_tro', 'ma_nhan_su')->withPivot('tu_ngay', 'den_ngay', 'mo_ta', 'luong_co_ban');
    }

    public function saveVaiTro(Request $data)
    {
        $vaitro = $this->create([
            'ma_to_chuc' => $data['ma_to_chuc'],
            'ten_vai_tro' => $data['ten_vai_tro'],
            'mo_ta' => $data['mo_ta'],
            'muc_luong' => $data['muc_luong'],
        ]);

        return $vaitro;
    }

    public function search(array $data)
    {
        $name = array_key_exists('key', $data) ? $data['key'] : null;

        return $this->SearchName($name)->latest('id')->paginate(array_key_exists('number', $data) ? $data['number'] : 3);
    }

    public function scopeSearchName($query, $name)
    {
        return $query->where('ten_vai_tro', 'like', '%' . $name . '%');
    }
}

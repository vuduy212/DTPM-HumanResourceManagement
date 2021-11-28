<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class NhanSu extends Model
{
    use HasFactory;

    protected $fillable = [
        'ten_nhan_su',
        'loai_nhan_su',
        'ngay_sinh',
        'gioi_tinh',
        'SDT',
        'email',
        'dan_toc',
        'que_quan',
        'CMND',
        'trinh_do',
        'mo_ta',
    ];

    public function saveNhanSu(Request $data)
    {
        $nhansu = $this->create([
            'ten_nhan_su' => $data['ten_nhan_su'],
            'loai_nhan_su' => $data['loai_nhan_su'],
            'ngay_sinh' => $data['ngay_sinh'],
            'gioi_tinh' => $data['gioi_tinh'],
            'SDT' => $data['SDT'],
            'email' => $data['email'],
            'dan_toc' => $data['dan_toc'],
            'que_quan' => $data['que_quan'],
            'CMND' => $data['CMND'],
            'trinh_do' => $data['trinh_do'],
            'mo_ta' => $data['mo_ta'],
        ]);

        return $nhansu;
    }

    public function search(array $data)
    {
        $name = array_key_exists('key', $data) ? $data['key'] : null;

        return $this->SearchName($name)->latest('id')->paginate(array_key_exists('number', $data) ? $data['number'] : 3);
    }

    public function scopeSearchName($query, $name)
    {
        return $query->where('ten_nhan_su', 'like', '%' . $name . '%');
    }
}

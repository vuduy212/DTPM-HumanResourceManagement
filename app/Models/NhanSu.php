<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhanSu extends Model
{
    use HasFactory;

    protected $fillable = [
        'ma_nhan_su',
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

    public function vai_tros()
    {
        return $this->belongsToMany(VaiTro::class, 'ns_vt', 'ma_nhan_su', 'ma_vai_tro')->withPivot('tu_ngay', 'den_ngay', 'mo_ta', 'luong_co_ban');
    }

    public function getVaiTroID($vaitros) //return 1 array cac vai tro
    {
        $getVaiTro = [];
        foreach($vaitros as $vaitro)
        {
            $getVaiTro[] = $vaitro;
        }
        return $getVaiTro;
    }

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

        // DB::table('ns_vt')->insert([
        //     'ma_vai_tro' => $data->ma_vai_tro,
        //     'ma_nhan_su' => $data->ma_nhan_su,
        //     'tu_ngay' => $data->tu_ngay,
        //     'den_ngay' => $data->den_ngay,
        //     'mo_ta' => $data->mo_ta,
        //     'luong_co_ban' => $data->luong_co_ban],
        // );

        // if(empty($data['vai_tros']))
        // {
        //     $vai_tros = [
        //         'Nhan vien' => '4'
        //     ];
        // }
        // else
        // {
        //     $vai_tros = $this->getVaiTroID($data['vai_tros']);
        // }

        // $nhansu->vai_tros()->attach($vai_tros);

        return $nhansu;
    }

    public function search(array $data)
    {
        $name = array_key_exists('key', $data) ? $data['key'] : null;

        return $this->SearchName($name)->latest('id')->paginate(array_key_exists('number', $data) ? $data['number'] : 10);
    }

    public function scopeSearchName($query, $name)
    {
        return $query->where('ten_nhan_su', 'like', '%' . $name . '%');
    }
}

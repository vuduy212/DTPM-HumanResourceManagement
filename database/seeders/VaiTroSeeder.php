<?php

namespace Database\Seeders;

use App\Models\VaiTro;
use Illuminate\Database\Seeder;

class VaiTroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $giam_doc = VaiTro::updateOrCreate([
            'ma_to_chuc' => '2',
            'ten_vai_tro' => 'Giam doc',
            'mo_ta' => 'Dung dau Cong ty',
            'muc_luong' => '1000',
        ]);

        $thu_ky = VaiTro::updateOrCreate([
            'ma_to_chuc' => '2',
            'ten_vai_tro' => 'Thu ky',
            'mo_ta' => 'Thu ky cua giam doc',
            'muc_luong' => '650',
        ]);

        $truong_phong_ns = VaiTro::updateOrCreate([
            'ma_to_chuc' => '3',
            'ten_vai_tro' => 'Truong phong',
            'mo_ta' => 'Truong phong nhan su',
            'muc_luong' => '850',
        ]);

        $truong_nhom = VaiTro::updateOrCreate([
            'ma_to_chuc' => '4',
            'ten_vai_tro' => 'Truong nhom',
            'mo_ta' => 'Leader cua nhom',
            'muc_luong' => '700',
        ]);

        $nhan_vien = VaiTro::updateOrCreate([
            'ma_to_chuc' => '4',
            'ten_vai_tro' => 'Nhan vien',
            'mo_ta' => 'Thanh vien cua 1 nhom',
            'muc_luong' => '500',
        ]);
    }
}

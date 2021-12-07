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
            'ma_to_chuc' => '1',
            'ten_vai_tro' => 'Giam doc',
            'mo_ta' => 'Dung dau Cong ty',
            'muc_luong' => '1000',
        ]);

        $truong_phong = VaiTro::updateOrCreate([
            'ma_to_chuc' => '2',
            'ten_vai_tro' => 'Truong phong',
            'mo_ta' => 'Dung dau 1 phong',
            'muc_luong' => '800',
        ]);

        $truong_nhom = VaiTro::updateOrCreate([
            'ma_to_chuc' => '3',
            'ten_vai_tro' => 'Truong nhom',
            'mo_ta' => 'Leader cua 1 nhom',
            'muc_luong' => '700',
        ]);

        $nhan_vien = VaiTro::updateOrCreate([
            'ma_to_chuc' => '3',
            'ten_vai_tro' => 'Nhan vien',
            'mo_ta' => 'Thanh vien cua 1 nhom',
            'muc_luong' => '500',
        ]);
    }
}

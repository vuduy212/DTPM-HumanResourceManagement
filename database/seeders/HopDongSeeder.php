<?php

namespace Database\Seeders;

use App\Models\HopDong;
use Illuminate\Database\Seeder;

class HopDongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HopDong::updateOrCreate([
            'ma_nhan_su' => '1',
            'ma_to_chuc' => '2',
            'ma_cong_viec' => '1',
            'tu_ngay' => '2020-01-01',
            'den_ngay' => '2020-12-31',
            'mo_ta' => '',
        ]);

        HopDong::updateOrCreate([
            'ma_nhan_su' => '2',
            'ma_to_chuc' => '2',
            'ma_cong_viec' => '1',
            'tu_ngay' => '2020-01-01',
            'den_ngay' => '2020-12-31',
            'mo_ta' => '',
        ]);

        HopDong::updateOrCreate([
            'ma_nhan_su' => '3',
            'ma_to_chuc' => '3',
            'ma_cong_viec' => '2',
            'tu_ngay' => '2020-01-01',
            'den_ngay' => '2020-12-31',
            'mo_ta' => '',
        ]);

        HopDong::updateOrCreate([
            'ma_nhan_su' => '4',
            'ma_to_chuc' => '4',
            'ma_cong_viec' => '3',
            'tu_ngay' => '2020-01-01',
            'den_ngay' => '2020-12-31',
            'mo_ta' => '',
        ]);

        HopDong::updateOrCreate([
            'ma_nhan_su' => '5',
            'ma_to_chuc' => '4',
            'ma_cong_viec' => '4',
            'tu_ngay' => '2020-01-01',
            'den_ngay' => '2020-12-31',
            'mo_ta' => '',
        ]);
    }
}

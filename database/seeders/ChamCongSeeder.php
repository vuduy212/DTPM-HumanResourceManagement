<?php

namespace Database\Seeders;

use App\Models\ChamCong;
use Illuminate\Database\Seeder;

class ChamCongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChamCong::updateOrCreate([
            'ma_nhan_su' => '1',
            'ma_chu_ky' => '2',
            'ma_kt_kl' => '2',
            'mo_ta' => '',
        ]);

        ChamCong::updateOrCreate([
            'ma_nhan_su' => '2',
            'ma_chu_ky' => '2',
            'ma_kt_kl' => '1',
            'mo_ta' => '',
        ]);

        ChamCong::updateOrCreate([
            'ma_nhan_su' => '3',
            'ma_chu_ky' => '2',
            'ma_kt_kl' => '3',
            'mo_ta' => '',
        ]);

        ChamCong::updateOrCreate([
            'ma_nhan_su' => '4',
            'ma_chu_ky' => '2',
            'ma_kt_kl' => '4',
            'mo_ta' => '',
        ]);

        ChamCong::updateOrCreate([
            'ma_nhan_su' => '5',
            'ma_chu_ky' => '2',
            'ma_kt_kl' => '5',
            'mo_ta' => '',
        ]);

        ChamCong::updateOrCreate([
            'ma_nhan_su' => '1',
            'ma_chu_ky' => '5',
            'ma_kt_kl' => '6',
            'mo_ta' => '',
        ]);

        ChamCong::updateOrCreate([
            'ma_nhan_su' => '2',
            'ma_chu_ky' => '5',
            'ma_kt_kl' => '1',
            'mo_ta' => '',
        ]);

        ChamCong::updateOrCreate([
            'ma_nhan_su' => '3',
            'ma_chu_ky' => '5',
            'ma_kt_kl' => '2',
            'mo_ta' => '',
        ]);

        ChamCong::updateOrCreate([
            'ma_nhan_su' => '4',
            'ma_chu_ky' => '5',
            'ma_kt_kl' => '3',
            'mo_ta' => '',
        ]);

        ChamCong::updateOrCreate([
            'ma_nhan_su' => '5',
            'ma_chu_ky' => '5',
            'ma_kt_kl' => '4',
            'mo_ta' => '',
        ]);
    }
}

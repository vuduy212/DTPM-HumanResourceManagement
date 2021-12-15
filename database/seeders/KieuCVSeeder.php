<?php

namespace Database\Seeders;

use App\Models\KieuCV;
use Illuminate\Database\Seeder;

class KieuCVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KieuCV::updateOrCreate([
            'ten_kieu_cv' => 'Quan ly',
            'mo_ta' => 'Quan ly',
            // 'ma_kieu_cv_cha' => '',
        ]);

        KieuCV::updateOrCreate([
            'ten_kieu_cv' => 'HR',
            'mo_ta' => 'Human Resource',
            // 'ma_kieu_cv_cha' => '',
        ]);

        KieuCV::updateOrCreate([
            'ten_kieu_cv' => 'Dev',
            'mo_ta' => 'Developer',
            // 'ma_kieu_cv_cha' => '',
        ]);

        KieuCV::updateOrCreate([
            'ten_kieu_cv' => 'Tester',
            'mo_ta' => 'Tester',
            // 'ma_kieu_cv_cha' => '',
        ]);

        KieuCV::updateOrCreate([
            'ten_kieu_cv' => 'BA',
            'mo_ta' => 'Business Analys',
            // 'ma_kieu_cv_cha' => '',
        ]);
    }
}

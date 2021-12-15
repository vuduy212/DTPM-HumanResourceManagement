<?php

namespace Database\Seeders;

use App\Models\ToChuc;
use Illuminate\Database\Seeder;

class ToChucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ToChuc::updateOrCreate([
            'ten_to_chuc' => 'Phòng giám đốc',
            'mo_ta' => 'phòng giám đốc',
            // 'ma_to_chuc_cha' => '0',
            // 'nguoi_lanh_dao' => '1',
        ]);

        ToChuc::updateOrCreate([
            'ten_to_chuc' => 'Phòng quản lý',
            'mo_ta' => 'phòng quản lý',
            'ma_to_chuc_cha' => '1',
            // 'nguoi_lanh_dao' => '1',
        ]);

        ToChuc::updateOrCreate([
            'ten_to_chuc' => 'Phòng nghiệp vụ',
            'mo_ta' => 'phòng nghiệp vụ',
            'ma_to_chuc_cha' => '2',
            // 'nguoi_lanh_dao' => '1',
        ]);

        ToChuc::updateOrCreate([
            'ten_to_chuc' => 'Phòng điều hành',
            'mo_ta' => 'phòng điều hành',
            'ma_to_chuc_cha' => '2',
            // 'nguoi_lanh_dao' => '1',
        ]);
    }
}

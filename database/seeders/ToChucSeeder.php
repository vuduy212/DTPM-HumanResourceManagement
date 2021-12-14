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
        $cong_ty = ToChuc::updateOrCreate([
            'ten_to_chuc' => 'Cong ty',
            'mo_ta' => 'La 1 Cong ty',
            // 'ma_to_chuc_cha' => '0',
            // 'nguoi_lanh_dao' => '1',
        ]);

        $phong = ToChuc::updateOrCreate([
            'ten_to_chuc' => 'Phong',
            'mo_ta' => 'La 1 Phong ban',
            'ma_to_chuc_cha' => '1',
            // 'nguoi_lanh_dao' => '1',
        ]);

        $nhom = ToChuc::updateOrCreate([
            'ten_to_chuc' => 'Nhom',
            'mo_ta' => 'La 1 Group',
            'ma_to_chuc_cha' => '2',
            // 'nguoi_lanh_dao' => '1',
        ]);
    }
}

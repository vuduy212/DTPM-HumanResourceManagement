<?php

namespace Database\Seeders;

use App\Models\KTKL;
use Illuminate\Database\Seeder;

class KTKLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KTKL::updateOrCreate([
            'loai_kt_kl' => 'Khen thuong',
            'STT' => '1',
            'ten' => 'Hoan thanh tot',
            'mo_ta' => '',
        ]);

        KTKL::updateOrCreate([
            'loai_kt_kl' => 'Khen thuong',
            'STT' => '2',
            'ten' => 'Gioi',
            'mo_ta' => '',
        ]);

        KTKL::updateOrCreate([
            'loai_kt_kl' => 'Khen thuong',
            'STT' => '3',
            'ten' => 'Kha',
            'mo_ta' => '',
        ]);

        KTKL::updateOrCreate([
            'loai_kt_kl' => 'Ky luat',
            'STT' => '1',
            'ten' => 'Muon gio',
            'mo_ta' => '',
        ]);

        KTKL::updateOrCreate([
            'loai_kt_kl' => 'Ky luat',
            'STT' => '2',
            'ten' => 'Lam viec rieng',
            'mo_ta' => '',
        ]);

        KTKL::updateOrCreate([
            'loai_kt_kl' => 'Ky luat',
            'STT' => '3',
            'ten' => 'Cham tien do',
            'mo_ta' => '',
        ]);
    }
}

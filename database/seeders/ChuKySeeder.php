<?php

namespace Database\Seeders;

use App\Models\ChuKy;
use Illuminate\Database\Seeder;

class ChuKySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChuKy::updateOrCreate([ //1
            'loai_chu_ky' => 'Nam',
            'STT' => '1',
            'ten_chu_ky' => 'Nam 2020',
            'tu_ngay' => '2020-01-01',
            'den_ngay' => '2020-12-31',
            'mo_ta' => '',
        ]);

        ChuKy::updateOrCreate([ //2
            'loai_chu_ky' => 'Thang',
            'STT' => '1',
            'ten_chu_ky' => 'Thang 1 Nam 2020',
            'tu_ngay' => '2020-01-01',
            'den_ngay' => '2020-01-31',
            'mo_ta' => '',
        ]);

        ChuKy::updateOrCreate([ //3
            'loai_chu_ky' => 'Thang',
            'STT' => '2',
            'ten_chu_ky' => 'Thang 2 Nam 2020',
            'tu_ngay' => '2020-02-01',
            'den_ngay' => '2020-02-28',
            'mo_ta' => '',
        ]);

        ChuKy::updateOrCreate([ //4
            'loai_chu_ky' => 'Thang',
            'STT' => '3',
            'ten_chu_ky' => 'Thang 3 Nam 2020',
            'tu_ngay' => '2020-03-01',
            'den_ngay' => '2020-03-31',
            'mo_ta' => '',
        ]);

        ChuKy::updateOrCreate([ //5
            'loai_chu_ky' => 'Tuan',
            'STT' => '1',
            'ten_chu_ky' => 'Tuan 1 Nam 2020',
            'tu_ngay' => '2020-01-01',
            'den_ngay' => '2020-01-08',
            'mo_ta' => '',
        ]);

        ChuKy::updateOrCreate([ //6
            'loai_chu_ky' => 'Tuan',
            'STT' => '2',
            'ten_chu_ky' => 'Tuan 2 Nam 2020',
            'tu_ngay' => '2020-01-08',
            'den_ngay' => '2020-01-15',
            'mo_ta' => '',
        ]);

        ChuKy::updateOrCreate([ //7
            'loai_chu_ky' => 'Ngay',
            'STT' => '1',
            'ten_chu_ky' => 'Ngay 1 Nam 2020',
            'tu_ngay' => '2020-01-01',
            'den_ngay' => '2020-01-01',
            'mo_ta' => '',
        ]);

        ChuKy::updateOrCreate([ //8
            'loai_chu_ky' => 'Ngay',
            'STT' => '2',
            'ten_chu_ky' => 'Ngay 2 Nam 2020',
            'tu_ngay' => '2020-01-01',
            'den_ngay' => '2020-01-02',
            'mo_ta' => '',
        ]);
    }
}

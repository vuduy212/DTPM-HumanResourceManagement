<?php

namespace Database\Seeders;

use App\Models\NhanSu;
use App\Models\VaiTro;
use Illuminate\Database\Seeder;

class NhanSuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ns1 = NhanSu::updateOrCreate([
            'ten_nhan_su' => 'Que',
            'loai_nhan_su' => 'Nhan vien',
            'ngay_sinh' => '2000-10-04',
            'gioi_tinh' => 'nu',
            'SDT' => '0967775035',
            'email' => 'anh@gmail.com',
            'dan_toc' => 'Kinh',
            'que_quan' => 'Hung Yen',
            'CMND' => '033200001234',
            'trinh_do' => 'Dai hoc',
            'mo_ta' => 'cute',
        ]);

        $ns2 = NhanSu::updateOrCreate([
            'ten_nhan_su' => 'Hoang',
            'loai_nhan_su' => 'Ung vien',
            'ngay_sinh' => '2005-01-01',
            'gioi_tinh' => 'nam',
            'SDT' => '0967775034',
            'email' => 'hoang@gmail.com',
            'dan_toc' => 'Kinh',
            'que_quan' => 'Hung Yen',
            'CMND' => '033200001235',
            'trinh_do' => 'Cap ba',
        ]);

        $ns3 = NhanSu::updateOrCreate([
            'ten_nhan_su' => 'Son',
            'loai_nhan_su' => 'Than nhan',
            'ngay_sinh' => '2017-01-01',
            'gioi_tinh' => 'nam',
            'SDT' => '0967775033',
            'email' => 'son@gmail.com',
            'dan_toc' => 'Kinh',
            'que_quan' => 'Hung Yen',
            'CMND' => '033200001236',
            'trinh_do' => 'Mau giao',
        ]);

        $ns4 = NhanSu::updateOrCreate([
            'ten_nhan_su' => 'Bao',
            'loai_nhan_su' => 'Ung vien',
            'ngay_sinh' => '2015-01-01',
            'gioi_tinh' => 'nam',
            'SDT' => '0967775032',
            'email' => 'bao@gmail.com',
            'dan_toc' => 'Kinh',
            'que_quan' => 'Hung Yen',
            'CMND' => '033200001237',
            'trinh_do' => 'Tieu hoc',
        ]);

        $ns5 = NhanSu::updateOrCreate([
            'ten_nhan_su' => 'Bich',
            'loai_nhan_su' => 'Nhan vien',
            'ngay_sinh' => '2000-01-01',
            'gioi_tinh' => 'nu',
            'SDT' => '0967775031',
            'email' => 'bich@gmail.com',
            'dan_toc' => 'Kinh',
            'que_quan' => 'Hung Yen',
            'CMND' => '033200001238',
            'trinh_do' => 'Dai hoc',
        ]);

        $giam_doc = VaiTro::where('id', '1')->first();
        $truong_phong = VaiTro::where('id', '2')->first();
        $truong_nhom = VaiTro::where('id', '3')->first();
        $nhan_vien = VaiTro::where('id', '4')->first();

        $ns1->vai_tros()->attach($giam_doc);
        $ns2->vai_tros()->attach($truong_phong);
        $ns3->vai_tros()->attach($truong_nhom);
        $ns4->vai_tros()->attach($nhan_vien);
    }
}

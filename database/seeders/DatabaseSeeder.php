<?php

namespace Database\Seeders;

use App\Models\HopDong;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NhanSuSeeder::class);
        $this->call(ToChucSeeder::class);
        $this->call(VaiTroSeeder::class);
        $this->call(ChuKySeeder::class);
        $this->call(HopDongSeeder::class);
        $this->call(KieuCVSeeder::class);
        $this->call(KTKLSeeder::class);
        $this->call(ChamCongSeeder::class);
    }
}

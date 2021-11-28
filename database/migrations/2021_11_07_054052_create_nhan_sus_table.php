<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanSusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_sus', function (Blueprint $table) {
            $table->id();
            $table->string('ten_nhan_su');
            $table->string('loai_nhan_su')->nullable();
            $table->date('ngay_sinh');
            $table->string('gioi_tinh');
            $table->string('SDT')->nullable();
            $table->string('email')->nullable();
            $table->string('dan_toc')->nullable();
            $table->string('que_quan')->nullable();
            $table->string('CMND')->nullable();
            $table->string('trinh_do')->nullable();
            $table->string('mo_ta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhan_sus');
    }
}

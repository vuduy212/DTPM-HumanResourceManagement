<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopDongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hop_dongs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ma_nhan_su')->unsigned();
            $table->foreign('ma_nhan_su')->references('id')->on('nhan_sus')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('ma_to_chuc')->unsigned();
            $table->foreign('ma_to_chuc')->references('id')->on('to_chucs')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('ma_cong_viec')->unsigned();
            $table->foreign('ma_cong_viec')->references('id')->on('kieu_cvs')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tu_ngay');
            $table->date('den_ngay')->nullable();
            $table->text('mo_ta')->nullable();
            $table->unique(['ma_nhan_su', 'tu_ngay']);
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
        Schema::dropIfExists('hop_dongs');
    }
}

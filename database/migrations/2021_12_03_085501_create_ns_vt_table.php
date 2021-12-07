<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNsVtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ns_vt', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ma_vai_tro')->unsigned();
            $table->bigInteger('ma_nhan_su')->unsigned();
            $table->foreign('ma_vai_tro')->references('id')->on('vai_tros');
            $table->foreign('ma_nhan_su')->references('id')->on('nhan_sus');
            $table->date('tu_ngay');
            $table->date('den_ngay')->nullable();
            $table->text('mo_ta')->nullable();
            $table->float('luong_co_ban')->unsigned()->nullable();
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
        Schema::dropIfExists('ns_vt');
    }
}

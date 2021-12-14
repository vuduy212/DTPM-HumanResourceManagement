<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToChucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_chucs', function (Blueprint $table) {
            $table->id();
            $table->text('ten_to_chuc');
            $table->text('mo_ta');
            $table->bigInteger('nguoi_lanh_dao')->unsigned()->nullable();
            $table->bigInteger('ma_to_chuc_cha')->unsigned()->nullable();
            $table->foreign('nguoi_lanh_dao')->references('id')->on('nhan_sus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ma_to_chuc_cha')->references('id')->on('to_chucs')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('to_chucs');
    }
}

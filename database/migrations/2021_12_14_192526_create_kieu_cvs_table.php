<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKieuCVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kieu_cvs', function (Blueprint $table) {
            $table->id();
            $table->text('ten_kieu_cv');
            $table->text('mo_ta')->nullable();
            $table->bigInteger('ma_kieu_cv_cha')->unsigned()->nullable();
            $table->foreign('ma_kieu_cv_cha')->references('id')->on('kieu_cvs')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('kieu_cvs');
    }
}

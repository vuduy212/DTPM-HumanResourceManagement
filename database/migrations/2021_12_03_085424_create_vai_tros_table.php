<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaiTrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vai_tros', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ma_to_chuc')->unsigned();
            //$table->foreign('ma_to_chuc')->references('id')->on('to_chucs');
            $table->string('ten_vai_tro');
            $table->text('mo_ta')->nullable();
            $table->float('muc_luong')->unsigned()->nullable();
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
        Schema::dropIfExists('vai_tros');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuanHesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quan_hes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ma_ns1')->unsigned();
            $table->bigInteger('ma_ns2')->unsigned();
            $table->foreign('ma_ns1')->references('id')->on('nhan_sus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ma_ns2')->references('id')->on('nhan_sus')->onUpdate('cascade')->onDelete('cascade');
            $table->text('kieu_quan_he')->nullable();
            $table->text('mo_ta')->nullable();
            $table->unique(['ma_ns1', 'ma_ns2']);
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
        Schema::dropIfExists('quan_hes');
    }
}

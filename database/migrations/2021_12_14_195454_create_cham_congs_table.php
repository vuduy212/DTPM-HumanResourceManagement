<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamCongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cham_congs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ma_nhan_su')->unsigned();
            $table->bigInteger('ma_chu_ky')->unsigned();
            $table->bigInteger('ma_kt_kl')->unsigned()->nullable();
            $table->foreign('ma_nhan_su')->references('id')->on('nhan_sus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ma_chu_ky')->references('id')->on('chu_kys')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ma_kt_kl')->references('id')->on('kt_kls')->onUpdate('cascade')->onDelete('cascade');
            $table->text('mo_ta')->nullable();
            $table->unique(['ma_nhan_su', 'ma_chu_ky']);
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
        Schema::dropIfExists('cham_congs');
    }
}

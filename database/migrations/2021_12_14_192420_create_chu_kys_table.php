<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuKysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chu_kys', function (Blueprint $table) {
            $table->id();
            $table->text('loai_chu_ky');
            $table->integer('STT')->unsigned();
            $table->text('ten_chu_ky')->nullable();
            $table->date('tu_ngay')->nullable();
            $table->date('den_ngay')->nullable();
            $table->text('mo_ta')->nullable();
            $table->unique(['loai_chu_ky', 'STT']);
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
        Schema::dropIfExists('chu_kys');
    }
}

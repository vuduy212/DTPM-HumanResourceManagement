<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKTKLSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kt_kls', function (Blueprint $table) {
            $table->id();
            $table->text('loai_kt_kl');
            $table->integer('STT');
            $table->text('ten')->nullable();
            $table->text('mo_ta')->nullable();
            $table->unique(['loai_kt_kl', 'STT']);
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
        Schema::dropIfExists('kt_kls');
    }
}

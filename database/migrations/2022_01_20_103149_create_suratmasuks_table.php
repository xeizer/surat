<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratmasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratmasuks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->text('no_surat');
            $table->date('tgl_masuk');
            $table->date('tgl_surat');
            $table->text('asal_surat');
            $table->text('perihal');
            $table->string('lampiran')->nullable();
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
        Schema::dropIfExists('suratmasuks');
    }
}

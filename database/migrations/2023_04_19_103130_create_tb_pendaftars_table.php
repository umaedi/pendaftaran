<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pendaftar');
            $table->string('email');
            $table->string('no_tlp');
            $table->string('lampiran_1');
            $table->string('lampiran_2');
            $table->string('lampiran_3');
            $table->string('lampiran_4');
            $table->string('lampiran_5');
            $table->string('lampiran_6');
            $table->string('lampiran_7');
            $table->string('lampiran_8');
            $table->string('lampiran_9');
            $table->string('lampiran_10');
            $table->string('lampiran_11');
            $table->string('lampiran_12');
            $table->string('status')->default('0');
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('tb_pendaftars');
    }
};

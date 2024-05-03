<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kelas_offlines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penanggung_jawab_id')->nullable();
            $table->foreign('penanggung_jawab_id')->references('id')->on('users');
            $table->string('nama');
            $table->text('ringkasan');
            $table->string('poster');
            $table->date('tgl_pelaksanaan');
            $table->string('jam_pelaksanaan');
            $table->string('lokasi_pelaksanaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas_offlines');
    }
};

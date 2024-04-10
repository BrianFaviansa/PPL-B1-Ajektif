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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('kode');
            $table->string('nama_alsintan');
            $table->enum('jenis_alsintan', ['alat berat', 'alat ringan']);
            $table->text('alasan_pengajuan');
            $table->string('dokumen_pengajuan');
            $table->enum('status', ['disetujui', 'belum disetujui'])->default('belum disetujui');
            $table->string('penanggung_jawab')->nullable();
            $table->string('surat_poktan')->nullable();
            $table->string('surat_dinas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};

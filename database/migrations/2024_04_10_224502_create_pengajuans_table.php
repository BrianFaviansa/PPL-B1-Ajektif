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
            $table->unsignedBigInteger('penanggung_jawab_id')->nullable();
            $table->foreign('penanggung_jawab_id')->references('id')->on('users');
            $table->string('kode');
            $table->string('nama_alsintan');
            $table->enum('jenis_alsintan', ['Alat Berat', 'Alat Ringan']);
            $table->text('alasan_pengajuan');
            $table->string('dokumen_pengajuan');
            $table->enum('status_tk1', ['Belum diproses', 'Belum disetujui BPP', 'Disetujui BPP'])->default('Belum diproses');
            $table->enum('status_tk2', ['Belum diproses', 'Belum disetujui Dinas', 'Disetujui Dinas'])->default('Belum diproses');
            $table->string('tanggapan_bpp')->nullable();
            $table->string('tanggapan_dinas')->nullable();
            $table->string('surat_poktan')->nullable();
            $table->string('surat_dinas')->nullable();
            $table->timestamp('disetujui_at')->nullable();
            $table->timestamp('surat_poktan_uploaded_at')->nullable();
            $table->timestamp('surat_dinas_uploaded_at')->nullable();
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

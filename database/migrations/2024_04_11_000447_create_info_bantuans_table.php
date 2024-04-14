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
        Schema::create('info_bantuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->default(5);
            $table->string('nama');
            $table->text('ringkasan');
            $table->text('syarat');
            $table->string('penanggung_jawab')->default('Dinas Pertanian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_bantuans');
    }
};

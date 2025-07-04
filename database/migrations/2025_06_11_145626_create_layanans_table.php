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
        Schema::create('layanans', function (Blueprint $table) {
    $table->id();
    $table->string('kode', 10);
    $table->string('nama', 100);
    $table->string('deskripsi', 200);
    $table->unsignedBigInteger('jenis_layanan_id')->nullable();
    $table->double('total_biaya');
    $table->string('foto_kendaraan');
    $table->integer('rating')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};

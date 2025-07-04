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
        Schema::create('montirs', function (Blueprint $table) {
    $table->id();
    $table->string('nomor');
    $table->string('nama', 50);
    $table->string('foto')->nullable();
    $table->char('gender', 10);
    $table->date('tgl_lahir');
    $table->string('tmp_lahir', 30);
    $table->string('keahlian', 200);
    $table->unsignedBigInteger('kategori_montir_id');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('montirs');
    }
};

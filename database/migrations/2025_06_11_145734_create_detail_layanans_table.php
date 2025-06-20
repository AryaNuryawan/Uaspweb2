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
        Schema::create('detail_layanans', function (Blueprint $table) {
    $table->id();
    $table->string('pekerjaan', 100);
    $table->double('biaya');
    $table->unsignedBigInteger('layanan_id');
    $table->unsignedBigInteger('pj_montir_id');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_layanans');
    }
};

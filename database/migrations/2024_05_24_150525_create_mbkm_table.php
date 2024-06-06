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
        Schema::create('mbkm', function (Blueprint $table) {
            $table->id('IdMBKM');
            $table->unsignedBigInteger('IdJenisMBKM');
            $table->unsignedBigInteger('IdJenisPertukaran')->nullable();
            $table->string('NIM')->nullable();
            $table->string('Nama')->nullable();
            $table->string('AsalKampus')->nullable();
            $table->string('AsalProdi')->nullable();
            $table->string('TujuanKampus')->nullable();
            $table->string('Tahun')->nullable();
            $table->string('NamaPerusahaan')->nullable();
            $table->string('Lokasi')->nullable();
            $table->string('Periode')->nullable();
            $table->string('Judul')->nullable();
            $table->string('JenisUsaha')->nullable();
            $table->timestamps();
            $table->foreign('IdJenisMBKM')->references('IdJenisMBKM')->on('jenis_mbkm')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbkm');
    }
};

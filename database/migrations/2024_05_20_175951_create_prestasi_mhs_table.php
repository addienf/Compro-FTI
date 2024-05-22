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
        Schema::create('prestasi_mhs', function (Blueprint $table) {
            $table->id('IdPrestasi');
            $table->string('JudulPrestasi');
            $table->string('ImgPrestasi');
            $table->string('DescPrestasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasi_mhs');
    }
};

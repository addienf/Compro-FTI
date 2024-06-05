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
        Schema::create('kerjasama', function (Blueprint $table) {
            $table->id('IdKerjasama');
            $table->string('NamaMitra');
            $table->unsignedBigInteger('IdJenisKerjasama');
            $table->boolean('Tridarma1')->default(false);
            $table->boolean('Tridarma2')->default(false);
            $table->boolean('Tridarma3')->default(false);
            $table->date('Mulai');
            $table->date('Berakhir');
            $table->text('Manfaat');
            $table->timestamps();

            $table->foreign('IdJenisKerjasama')->references('IdJenisKerjasama')->on('jenis_kerjasama')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kerjasama');
    }
};

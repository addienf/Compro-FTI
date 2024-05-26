<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jenis_kerjasama', function (Blueprint $table) {
            $table->id('IdJenisKerjasama');
            $table->string('NamaJenisKerjasama');
            $table->timestamps();
        });

        DB::table('jenis_kerjasama')->insert([
            [
                'NamaJenisKerjasama' => 'Nasional',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'NamaJenisKerjasama' => 'Internasional',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_kerjasama');
    }
};

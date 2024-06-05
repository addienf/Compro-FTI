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
        Schema::create('jenis_mbkm', function (Blueprint $table) {
            $table->id('IdJenisMBKM');
            $table->string('NamaJenisMBKM');
            $table->timestamps();
        });

        DB::table('jenis_mbkm')->insert([
            [
                'NamaJenisMBKM' => 'Pertukaran Mahasiswa',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'NamaJenisMBKM' => 'Magang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'NamaJenisMBKM' => 'KKN Tematik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'NamaJenisMBKM' => 'Penelitian',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'NamaJenisMBKM' => 'PKM',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'NamaJenisMBKM' => 'Kewirausahaan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'NamaJenisMBKM' => 'Asisten Manager',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'NamaJenisMBKM' => 'Studi Independen',
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
        Schema::dropIfExists('jenis_mbkm');
    }
};

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
        Schema::create('jenis_pertukaran', function (Blueprint $table) {
            $table->id('IdJenisPertukaran');
            $table->string('NamaJenisPertukaran');
            $table->timestamps();
        });

        DB::table('jenis_pertukaran')->insert([
            [
                'NamaJenisPertukaran' => 'Mahasiswa ITENAS',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'NamaJenisPertukaran' => 'Mahasiswa Inbound',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'NamaJenisPertukaran' => 'Mahasiswa Outbound',
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
        Schema::dropIfExists('_jenis_pertukaran');
    }
};

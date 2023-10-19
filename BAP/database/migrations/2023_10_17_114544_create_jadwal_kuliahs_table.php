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
        Schema::create('jadwal_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->varchar ('Kode_Matakuliah');
            $table->varchar ('Kode_Term');
            $table->varchar ('Kode_Dosen_Pengampu');
            $table->varchar ('Hari');
            $table->time ('Jam_Mulai_Perkuliahan');
            $table->time ('Jam_Selesai_Perkuliahan');
            $table->varchar ('Ruangan_Kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kuliahs');
    }
};

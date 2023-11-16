<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jadwal')->constrained('jadwal')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_mahasiswa')->constrained('mahasiswa')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('keterangan',['Hadir','Izin','Sakit','Alfa']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensi');
    }
};

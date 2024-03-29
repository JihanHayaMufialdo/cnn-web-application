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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kelas')->constrained('kelas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('hari',['Senin','Selasa','Rabu','Kamis','Jumat']);
            $table->time('mulai');
            $table->time('selesai');
            $table->string('ruangan');
            $table->enum('jenis', ['T','P']);
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
        Schema::dropIfExists('jadwal');
    }
};

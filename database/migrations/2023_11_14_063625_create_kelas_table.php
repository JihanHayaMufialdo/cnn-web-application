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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('id_matkul')->constrained('mata_kuliah')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignUuid('id_dosen')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('periode',['2023 Genap','2023 Ganjil']);
            $table->enum('kurikulum',['2020']);
            $table->integer('kuota')->default(0);
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
        Schema::dropIfExists('kelas');
    }
};

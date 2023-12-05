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
        Schema::create('pertemuan', function (Blueprint $table) {
            $table->id();
            $table->integer('pertemuan');
            $table->foreignId('id_kelas')->constrained('kelas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('tanggal')->default(now());
            $table->time('mulai');
            $table->time('selesai');
            $table->text('materi')->nullable();
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
        Schema::dropIfExists('pertemuan');
    }
};

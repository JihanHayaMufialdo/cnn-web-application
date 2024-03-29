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
        Schema::table('pertemuan', function (Blueprint $table) {
            $table->string('ruangan')->nullable();
            $table->enum('jenis', ['T','P']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertemuan', function (Blueprint $table) {
            //
        });
    }
};

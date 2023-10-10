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
        Schema::create('pegawai', function (Blueprint $table) {

            $table->string('id_pegawai', 10)->primary();
            $table->string('nama', 50);
            $table->integer('nik')->nullable();
            $table->string('alamat', 100)->nullable();
            $table->integer('no_telepon')->nullable();
            $table->date('tanggal_bekerja')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};

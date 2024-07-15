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
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barangs');
            $table->unsignedBigInteger('id_pinjaman');
            $table->string('nama_peminjam');
            $table->date('tanggal_pengembalian');
            $table->unsignedBigInteger('jumlah');
            $table->string('status');
            $table->timestamps();
            $table->foreign('id_barangs')->references('id')->on('barangs')->onDelete('cascade');
            $table->foreign('id_pinjaman')->references('id')->on('pinjamen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};

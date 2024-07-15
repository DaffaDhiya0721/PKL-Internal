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
        Schema::create('barang__masuks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barangs');
            $table->date('tanggal_masuk');
            $table->unsignedBigInteger('jumlah');
            $table->string('keterangan');
            $table->timestamps();
            $table->foreign('id_barangs')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang__masuks');
    }
};

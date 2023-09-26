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
        Schema::create('produk', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('id_harga')->references('id')->on('harga');
            $table->string('nama produk', 100);
            $table->string('deskripsi_produk', 100);
            $table->string('warna_produk', 20);
            $table->string('kategori_produk', 15);
            $table->integer('stock');
            $table->string('gambar', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};

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
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('id_produk')->references('id')->on('produk');
            $table->foreignId('id_user')->references('id')->on('user');
            $table->string('komentar', 150);
            $table->float('rating');
            $table->date('tanggal_ulasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan');
    }
};

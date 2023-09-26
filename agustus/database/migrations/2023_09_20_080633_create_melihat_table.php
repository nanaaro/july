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
        Schema::create('melihat', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('id_guest')->references('id_guest')->on('guest');
            $table->foreignId('id_produk')->references('id')->on('produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('melihat');
    }
};

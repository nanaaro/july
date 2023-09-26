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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('pemesanan');
            $table->foreignId('user_id')->references('id')->on('user');
            $table->date('tanggal-pemesanan');
            $table->integer('jumlah_pemesanan');
            $table->integer('totalharga_pemesanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};

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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->text('deskripsi');
            $table->integer('harga'); // Simpan sebagai integer, contoh: 50000 untuk Rp 50.000
            $table->integer('stok');
            $table->string('gambar_produk')->nullable(); // Path ke gambar produk

            // Membuat relasi ke tabel categories
            // Jika kategori dihapus, produk terkait juga akan dihapus
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
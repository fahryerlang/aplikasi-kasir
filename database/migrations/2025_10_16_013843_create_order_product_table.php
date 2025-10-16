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
        // Tabel ini adalah tabel pivot untuk menghubungkan orders dan products (Relasi Many-to-Many)
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();

            // Relasi ke tabel orders
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            // Relasi ke tabel products
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');

            // Informasi tambahan
            $table->integer('jumlah');
            $table->integer('harga_saat_transaksi'); // Menyimpan harga produk pada saat transaksi terjadi
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product');
    }
};
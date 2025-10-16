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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->unique();
            $table->integer('total_harga');
            $table->enum('status', ['pending', 'paid', 'cancelled'])->default('pending');
            $table->timestamp('tanggal_transaksi');

            // Relasi ke user yang membeli
            $table->foreignId('pembeli_id')->constrained('users')->onDelete('cascade');
            
            // Relasi ke user kasir yang memproses. Bisa NULL jika pembeli checkout sendiri.
            // onDelete('set null') berarti jika user kasir dihapus, datanya di sini jadi NULL
            $table->foreignId('kasir_id')->nullable()->constrained('users')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
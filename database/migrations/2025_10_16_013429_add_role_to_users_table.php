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
        Schema::table('users', function (Blueprint $table) {
            // Menambahkan kolom 'role' setelah kolom 'email'
            // Nilai default-nya adalah 'pembeli'
            // Enum membatasi nilai yang bisa dimasukkan: admin, petugas_kasir, pembeli
            $table->enum('role', ['admin', 'petugas_kasir', 'pembeli'])
                  ->default('pembeli')
                  ->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus kolom 'role' jika migrasi di-rollback
            $table->dropColumn('role');
        });
    }
};
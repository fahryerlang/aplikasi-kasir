<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Atribut yang boleh diisi secara massal.
     */
    protected $fillable = [
        'invoice_number',
        'total_harga',
        'status',
        'tanggal_transaksi',
        'pembeli_id',
        'kasir_id',
    ];

    /**
     * Relasi: Satu order dimiliki oleh satu user (pembeli).
     */
    public function pembeli()
    {
        return $this->belongsTo(User::class, 'pembeli_id');
    }

    /**
     * Relasi: Satu order diproses oleh satu user (kasir).
     */
    public function kasir()
    {
        return $this->belongsTo(User::class, 'kasir_id');
    }

    /**
     * Relasi: Satu order bisa memiliki banyak produk.
     */
    public function products()
    {
        // Relasi Many-to-Many ke tabel Product melalui tabel pivot 'order_product'
        return $this->belongsToMany(Product::class, 'order_product')
                    ->withPivot('jumlah', 'harga_saat_transaksi'); // Mengambil data tambahan dari tabel pivot
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Atribut yang boleh diisi secara massal.
     */
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'stok',
        'gambar_produk',
        'category_id',
    ];

    /**
     * Relasi: Satu produk dimiliki oleh satu kategori.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relasi: Satu produk bisa ada di banyak order.
     */
    public function orders()
    {
        // Relasi Many-to-Many ke tabel Order melalui tabel pivot 'order_product'
        return $this->belongsToMany(Order::class, 'order_product')
                    ->withPivot('jumlah', 'harga_saat_transaksi'); // Mengambil data tambahan dari tabel pivot
    }
}
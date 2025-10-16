<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Pastikan 'role' sudah ada di sini
        'google_id',
        'clerk_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relasi: Mendapatkan semua order yang dibuat oleh user ini (sebagai pembeli).
     */
    public function ordersAsPembeli()
    {
        return $this->hasMany(Order::class, 'pembeli_id');
    }

    /**
     * Relasi: Mendapatkan semua order yang diproses oleh user ini (sebagai kasir).
     */
    public function ordersAsKasir()
    {
        return $this->hasMany(Order::class, 'kasir_id');
    }
}
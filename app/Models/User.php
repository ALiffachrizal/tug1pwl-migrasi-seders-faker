<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens dihapus dari sini

class User extends Authenticatable
{
    // HasApiTokens dihapus dari baris di bawah ini:
    use HasFactory, Notifiable;

    protected $primaryKey = 'npm';
    public $incrementing = false;
    protected $keyType = 'integer';

    protected $fillable = [
        'npm', 'username', 'first_name', 'last_name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relasi: Satu User punya BANYAK Peminjaman
    public function loans()
    {
        return $this->hasMany(Loan::class, 'user_npm', 'npm');
    }
}
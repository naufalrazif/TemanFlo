<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // (opsional, Laravel otomatis tahu kalau nama tabelnya "produks")
    protected $table = 'produks';
    

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'nama',
        'jenis_buket',
        'tema',
        'deskripsi',
        'harga',
        'foto',
    ];


    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
    public function item_keranjang()
    {
        return $this->hasMany(item_keranjang::class);
    }
    public function getTemaAttribute($value)
    {
        return $value ? explode(',', $value) : [];
    }
    public function setTemaAttribute($value)
    {
        $this->attributes['tema'] = is_array($value)
            ? implode(',', $value)
            : $value;
    }
}

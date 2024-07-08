<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public $fillable = ['nama_barang','jumlah', 'id_kategori'];
    public $visible = ['nama_barang','jumlah', 'id_kategori'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function barang_masuk()
    {
        return $this->hasMany(Barang_Masuk::class, 'id_barangs');
    }

    public function barang_keluar()
    {
        return $this->hasMany(Barang_Keluar::class, 'id_barangs');
    }

    public function pinjaman()
    {
        return $this->hasMany(Pinjaman::class, 'id_barangs');
    }

    public function pengembalian()
    {
        return $this->hasMany(Pengembalian::class, 'id_barangs');
    }
}

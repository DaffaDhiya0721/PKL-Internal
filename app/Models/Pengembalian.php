<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    public $fillable = ['nama_peminjam', 'tanggal_pengembalian', 'jumlah', 'status'];
    public $visible = ['nama_peminjam', 'tanggal_pengembalian', 'jumlah', 'status'];
    public $timestamps = true;

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barangs');
    }
}

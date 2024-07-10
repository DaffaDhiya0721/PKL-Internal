<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    use HasFactory;

    public $fillable = ['id_barangs','nama_peminjam', 'tanggal_pinjam', 'jumlah', 'status'];
    public $visible = ['id_barangs','nama_peminjam', 'tanggal_pinjam', 'jumlah', 'status'];
    public $timestamps = true;

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barangs');
    }
    
}



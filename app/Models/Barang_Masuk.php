<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_Masuk extends Model
{
    use HasFactory;

    public $fillable = ['id_barangs', 'tanggal_masuk', 'jumlah', 'keterangan'];
    public $visible = ['id_barangs', 'tanggal_masuk', 'jumlah', 'keterangan'];
    public $timestamps = true;

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barangs');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $fillable = ['name'];
    public $visible = ['name'];
    public $timestamps = true;

    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_kategori');
        return $this->BelongsTo(Barang::class, 'jumlah');
    }
}

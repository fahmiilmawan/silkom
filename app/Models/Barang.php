<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $fillable = [
        'nama_barang',
        'id_kategori',
        'jumlah',
        'status',
        'id_ruangan',
        'deskripsi',
    ];

    public function kategoriBarang(){
        return $this->belongsTo(KategoriBarang::class);
    }
    public function ruangan(){
        return $this->belongsTo(Ruangan::class);
    }

    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }

    public function pengembalian(){
        return $this->hasMany(Pengembalian::class);
    }

}

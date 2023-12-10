<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = "history";
    protected $fillable = [
        'id_peminjaman',
        'id_pengembalian',
        'status'
    ];

    public function peminjaman(){
        return $this->belongsTo(Peminjaman::class,'id_peminjaman');
    }

    public function pengembalian(){
        return $this->belongsTo(Pengembalian::class,'id_pengembalian');
    }

}

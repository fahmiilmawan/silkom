<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjaman";
    protected $fillable = [
        'id_user',
        'id_barang',
        'waktu_pinjam',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
    public function barang(){
        return $this->belongsTo(Barang::class,'id_barang');
    }
    public function history(){
        return $this->belongsTo(History::class,'id_history');
    }


}

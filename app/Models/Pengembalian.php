<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = "pengembalian";
    protected $fillable = [
        'id_user',
        'id_barang',
        'waktu_pengembalian',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function barang(){
        return $this->belongsTo(Barang::class);
    }

    public function history(){
        return $this->belongsTo(History::class);
    }
}

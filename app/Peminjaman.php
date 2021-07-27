<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjamen';
    protected $fillable = ['tanggal_pinjam','tanggal_kembali','nama_peminjam','alamat','buku_id'];

    public function buku(){
        return $this->belongsTo(Buku::class, 'buku_id');
}
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $fillable = [
        'ruangan_id',
        'barang_id',
        'kondisi'];

    public function ruangan() {
        return $this->belongsTo(Ruangan::class); 
        }
    public function barang() {
        return $this->belongsTo(Barang::class);
        }
}

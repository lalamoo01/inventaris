<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Override;

class Ruangan extends Model
{
    protected $fillable = [
        'nama_ruangan',
        'jurusan'
    ];
}

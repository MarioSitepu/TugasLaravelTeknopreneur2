<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    // Kolom yang boleh diisi lewat create() / update()
    protected $fillable = [
        'nama',
        'divisi',
        'jabatan',
    ];
}

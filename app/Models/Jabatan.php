<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';
    protected $fillable = [
        'nama_jabatan',
        'gapok_jabatan',
        'tunjangan_jabatan',
        'uang_makan_perhari'
    ];
    public $timestamps = false;
}

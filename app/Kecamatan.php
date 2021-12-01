<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'tb_kecamatan';
    protected $fillable = [
        'nama_kecamatan',
        'nama_camat',
        'masa_jabatan',
        'no_tlp',
        'email'
    ];
    protected $primaryKey = 'id';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'tb_kelurahan';
    protected $fillable = [
        'nama_kelurahan',
        'nama_lurah',
        'masa_jabatan',
        'no_tlp',
        'email'
    ];
    protected $primaryKey = 'id';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    protected $table = 'tb_rw';
    protected $fillable = [
        'nama_rw',
        'masa_jabatan',
        'no_tlp',
        'email'
    ];
    protected $primaryKey = 'id';
}

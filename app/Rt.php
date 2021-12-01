<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    protected $table = 'tb_rt';
    protected $fillable = [
        'nama_rt',
        'masa_jabatan',
        'no_tlp',
        'email'
    ];
    protected $primaryKey = 'id';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = "Petugas";
    protected $fillable =[
        'nama_petugas',
        'email',
        'passwoard',
        'no_tlp',
    ];
}

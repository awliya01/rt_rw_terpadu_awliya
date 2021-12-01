<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPenduduk extends Model
{
    protected $table = 'tb_datapenduduk';
    protected $fillable = [
        'nik',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'pekerjaan',
        'penghasilan',
        'kota',
        'kecamatan',
        'kelurahan',
        'rt',
        'rw',
        'alamat',
        'no_rumah',
        'email',
        'password',
        'user_id',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'id';
}

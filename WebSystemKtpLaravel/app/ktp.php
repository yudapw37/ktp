<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ktp extends Model
{
    protected $table = "ktp";
    protected $primaryKey = "id";
    protected $fillable = [
        'NIK','Nama','TempatLahir','TanggalLahir','Jenis_Kelamin','Gol_Darah', 'Alamat',
        'RT_RW','Dk','Ds','Kec','Agama','Status','Kerja','Kewarganegaraan','foto'
    ];
}

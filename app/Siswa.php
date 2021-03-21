<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'datasiswas';
    protected $fillable = ['nama','jk','tempat','ttl','nik','ayah','ibu','pekerjaan','alamat','kecamatan'];
}

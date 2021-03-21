<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'datapegawais';
    protected $fillable = ['nama','nip','jabatan'];
}

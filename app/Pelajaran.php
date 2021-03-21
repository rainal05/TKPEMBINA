<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    protected $table = 'datakegiatans';
    protected $fillable = ['judul','isi'];
}

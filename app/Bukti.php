<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bukti extends Model
{
    protected $table = 'calonbuktis';
    protected $fillable = ['bukti', 'user_id','metode','pemilik','nama','data_calon_id'];

    public function sts()
    {
        return $this->hasOne(Buktistatus::class);
    }

    public function datacalon()
    {
        return $this->hasOne(Data_calon::class);
    }
}

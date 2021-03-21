<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    protected $table = 'calons';
    protected $fillable = ['user_id', 'nama','email','status'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    //relasi
    public function datacalon()
    {
        return $this->hasOne(Data_calon::class);
    }
}

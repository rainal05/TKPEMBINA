<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buktistatus extends Model
{
    protected $table = 'buktistatuses';
    protected $fillable = ['user_id','status', 'bukti_id'];

    public function bukti()
    {
        return $this->hasOne(Bukti::class);
    }

}

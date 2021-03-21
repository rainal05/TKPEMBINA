<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_calon extends Model
{
    protected $table = 'calondatas';
    protected $fillable = ['user_id','calon_id','nama','panggilan','jk','tempat','ttl','nik',
'jalan','lurah','camat','kabkota','kodepos','jarak','transportasi','agama','warganegara','anakke','berat',
'berat','tinggi','saudara','goldarah','penyakit','imunisasi','cirikhusus','ayah','ttlayah','ibu','ttlibu',
'nokk','pendidikanayah','pendidikanibu','kerjaayah','kerjaibu','hpayah','hpibu','status','bayar'];

    public function calon()
    {
        return $this->hasOne(Calon::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function bukti()
    {
        return $this->hasOne(Bukti::class);
    }

}

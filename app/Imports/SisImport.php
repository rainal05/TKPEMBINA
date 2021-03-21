<?php

namespace App\Imports;

use App\Sis;
use App\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SisImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Siswa([
            'nama' => $row[1],
            'jk' => $row[2],
            'tempat' => $row[3],
            'nik' => $row[5],
            'ayah' => $row[6],
            'ibu' => $row[7],
            'pekerjaan' => $row[8],
            'alamat' => $row[9],
            'kecamatan' => $row[10],
        ]);

    }
}

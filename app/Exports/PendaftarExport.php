<?php

namespace App\Exports;

use App\Pendaftar;
use Maatwebsite\Excel\Concerns\FromCollection;

class PendaftarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pendaftar::all();
    }
}

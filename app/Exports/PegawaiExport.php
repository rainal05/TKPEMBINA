<?php

namespace App\Exports;

use App\Pegawai;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class PegawaiExport implements FromCollection, WithMapping, WithHeadings, WithColumnWidths, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pegawai::all();
    }
    public function map($pegawai): array
    {
        return [
            $pegawai->nama,
            $pegawai->nip,
            $pegawai->jabatan,
        ];
    }
    public function headings(): array
    {
        return [
            'NAMA',
            'NIP',
            'JABATAN',
        ];
    }
    public function columnWidths(): array
    {
        return [
            'A' => 25,
            'B' => 22,
            'C' => 15,
        ];
    }
    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
            1  => ['font' => ['size' => 12]],
        ];
    }
}

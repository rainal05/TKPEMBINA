<?php

namespace App\Exports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class SiswaExport implements FromCollection, WithMapping, WithHeadings, WithColumnWidths, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Siswa::all();
    }

    public function map($siswa): array
    {
        return [
            $siswa->nama,
            $siswa->jk,
            $siswa->tempat,
            $siswa->ttl,
            $siswa->nik,
            $siswa->ayah,
            $siswa->ibu,
            $siswa->pekerjaan,
            $siswa->alamat,
            $siswa->kecamatan,
        ];
    }
    public function headings(): array
    {
        return [
            'Nama',
            'Jenis Kelamin',
            'Tempat',
            'Tanggal Lahir',
            'NIK Anak',
            'Nama Ayah',
            'Nama Ibu',
            'Pekerjaan',
            'Alamat',
            'Kecamatan',
        ];
    }
    public function columnWidths(): array
    {
        return [
            'A' => 25,
            'B' => 12,
            'C' => 10,
            'D' => 17,
            'E' => 20,
            'F' => 16,
            'G' => 15,
            'H' => 15,
            'I' => 30,
            'K' => 15,
        ];
    }
    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
            1  => ['font' => ['size' => 14]],
        ];
    }
}

<?php

namespace App\Http\Controllers;

use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::get();
        return view('siswa.siswa',['siswa' => $siswa]);
    }

    public function tambah()
    {
        return view('siswa.tambah-siswa');
    }

    public function store(Request $request)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'nama' => 'required',
            'jk' => 'required',
            'tempat' => 'required',
            'ttl' => 'required',
            'nik' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
        ], $massage);

        Siswa::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tempat' => $request->tempat,
            'ttl' => $request->ttl,
            'nik' => $request->nik,
            'ayah' => $request->ayah,
            'ibu' => $request->ibu,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,

        ]);
        return redirect('siswa')->with('notif', 'Data Siswa Berhasil di Tambah');
    }

    public function edit(Siswa $siswa, $id)
    {
        $sis = Siswa::find($id);
        return view('siswa.edit-siswa', compact('sis'));
    }

    public function update(Request $request, $id)
    {
        $sis= \App\Siswa::find($id);
        $sis->update($request->all());
        return redirect('siswa')->with('notif','Data Siswa Berhasil di Edit');
    }

    public function import(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_siswa', $nama_file);

        // import data
        Excel::import(new \App\Imports\SisImport, public_path('/file_siswa/' . $nama_file));

        // alihkan halaman kembali
        return redirect('/siswa');
    }

    public function export()
    {

        return Excel::download(new SiswaExport, 'Siswa.xlsx');
    }
}

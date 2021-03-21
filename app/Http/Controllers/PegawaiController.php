<?php

namespace App\Http\Controllers;

use App\Exports\PegawaiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::get();
        return view('pegawai.pegawai',['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('pegawai.tambah-pegawai');
    }

    public function store(Request $request)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
        ], $massage);

        Pegawai::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,

        ]);
        return redirect('pegawai')->with('notif','Data Pegawai Berhasi di Tambah');
    }

    public function edit(Pegawai $pegawai, $id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit-pegawai', compact('pegawai'));
    }

    public function update(Request $request,$id)
    {
        $pegawai = \App\Pegawai::find($id);
        $pegawai->update($request->all());
        return redirect('pegawai')->with('notif','Data Pegawai Berhasil di Edit');
    }

    public function delete($id)
    {
        $pegawai = \App\Pegawai::find($id);
        $pegawai->delete();
        return redirect('pegawai')->with('notif', 'Data Pegawai Berhasil di Hapus');
    }
    public function export()
    {
        return Excel::download(new PegawaiExport, 'Pegawai.xlsx');
    }
}

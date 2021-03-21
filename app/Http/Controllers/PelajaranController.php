<?php

namespace App\Http\Controllers;
use App\Pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function index()
    {
        $pelajaran = Pelajaran::get();
        return view('kegiatan.kegiatan',['pelajaran'=>$pelajaran]);
    }

    public function tambah()
    {
        return view('kegiatan.tambah-kegiatan');
    }

    public function store(Request $request)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',

        ], $massage);

        Pelajaran::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        return redirect('kegiatan')->with('notif', 'Data Pelajaran Berhasil di Tambah');
    }

    public function edit(Pelajaran $kegiatan, $id)
    {
        $kegiatan = Pelajaran::find($id);
        return view('kegiatan.edit-kegiatan', compact('kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $kegiatan = \App\Pelajaran::find($id);
        $kegiatan->update($request->all());
        return redirect('kegiatan')->with('notif', 'Data Pelajaran Berhasil di Edit');
    }

    public function hapus($id)
    {
        // hapus data
        Pelajaran::where('id', $id)->delete();
        return redirect()->back()->with('notif', 'Data Pelajaran Berhasil di Hapus');
    }
}

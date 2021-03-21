<?php

namespace App\Http\Controllers;

use App\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function index()
    {
        $kurikulum = Kurikulum::get();
        return view('kurikulum.kurikulum', compact('kurikulum'));
    }

    public function tambah()
    {
        return view('kurikulum.tambah-kurikulum');
    }

    public function store(Request $request)
    {
        Kurikulum::create([
            'kode' => $request->kode,
            'isi' => $request->isi,
        ]);
        return redirect('kurikulum')->with('notif','Data Kurikulum Berhasil di Tambah');
    }

    public function edit(Kurikulum $kurikulum, $id)
    {
        $kurikulum = Kurikulum::find($id);
        return view('kurikulum.edit-kurikulum', compact('kurikulum'));
    }

    public function update(Request $request, $id)
    {
        $kurikulum = \App\Kurikulum::find($id);
        $kurikulum->update($request->all());
        return redirect('kurikulum')->with('notif', 'Data Kurikulum Berhasil di Edit');
    }

    public function delete($id)
    {
        Kurikulum::where('id', $id)->delete();
        return back()->with('notif', 'Data Kurikulum Berhasil di Hapus');
    }
}

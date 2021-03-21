<?php

namespace App\Http\Controllers;
use App\Data_calon;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index()
    {
        $calon = Data_calon::latest()->paginate(10);
        return view('data-pendaftar', ['calon' => $calon]);
    }
    //hapus daftar
    public function delete($id)
    {

        $pendaftar = Data_calon::whereId($id)->first();
        $pendaftar->bukti()->delete();
        $pendaftar->delete();
        return redirect()->back()->with('notif', 'Data Pendaftar Berhasil di Hapus');
    }
}

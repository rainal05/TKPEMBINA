<?php

namespace App\Http\Controllers;

use App\Bukti;
use App\Buktistatus;
use App\Calon;
use App\Data_calon;
use App\User;
use App\Siswa;
use PDF;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class AdminController extends Controller
{



    public function hps($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        // hapus data
        Siswa::where('id', $id)->delete();
        // hapus data
        return redirect('siswa')->with('notif','Data Siswa Berhasil di Hapus');
    }

    //hapus bayar
    public function hapus($id)
    {
        Bukti::where('id', $id)->delete();
        return back()->with('notif','Data Pembayaran Berhasil di Hapus');
    }

    public function bayar()
    {
        $cek = Buktistatus::where('user_id', \Auth::user()->id)->count();
        $bayar = Bukti::latest()->paginate(10);
        return view('data-pembayaran', ['bayar' => $bayar], compact('cek'));
    }

    public function detail($id)
    {
        $detail = \App\Data_calon::find($id);
        $sts = \App\Buktistatus::find($id);
        return view('detail-pendaftar',['detail' => $detail,$sts]);
    }
//ubahhh status data pendaftar terima
    public function ubahstatus($id)
    {
        $detail = Data_calon::find($id);
        $detail->status = "DITERIMA";
        $detail->bayar = "BAYAR";
        $detail->save();
        return back()->with('notif','Pendaftar  Berhasil di Terima');
    }

    public function ubahbatal($id)
    {
        $detail = Data_calon::find($id);
        $detail->status = "BATAL";
        $detail->bayar ="BELUM";
        $detail->save();
        return back()->with('notif','Pendaftar di Batalkan');
    }

    //ubahhh status pembayaran
    public function ubahbayar(Request $request, $id)
    {
        $data['bukti_id'] = $request->bukti_id;
        $data['user_id'] = $request->user_id;
        $data['status'] = $request->status;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        Buktistatus::insert($data);
        return back()->with('notif','Pembayaran Berhasil di Terima');
    }

    public function pendaftarpdf()
    {
        $pendaftar = Data_calon::whereId('id')->first();
        $pdf = PDF::loadView('exportpdf.pendaftarpdf', ['pendaftar' => $pendaftar]);
        return $pdf->stream('Pendaftar.pdf');
    }

}

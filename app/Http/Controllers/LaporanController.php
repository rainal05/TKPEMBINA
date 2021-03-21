<?php

namespace App\Http\Controllers;
use App\Calon;
use App\Data_calon;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function daftar()
    {
        //SELURUH YG DAFTAR
        $all = Data_calon::all()->count();
        //DATA DITERIMA
        $terima = Data_calon::where('status', 'DITERIMA')->count();
        //BATAL
        $batal = Data_calon::where('status', 'BATAL')->count();
        return view('laporan.laporan-daftar',compact('terima','all','batal'));
    }

    public function bayar()
    {
        //Bayar
        $byr = Data_calon::where('bayar','BAYAR')->count();
        //BELUM Bayar
        $blm = Data_calon::where('bayar', 'BELUM')->count();
        return view('laporan.laporan-bayar',compact('byr','blm'));
    }

    public function batal()
    {
        //DAFTAR
        $daftrm = Data_calon::where('status','DITERIMA')->count();
        $dafbtl = Data_calon::where('status','BATAL')->count();
        //BAYAR
        $byr = Data_calon::where('bayar', 'BAYAR')->count();
        $btl = Data_calon::where('bayar', 'BELUM')->count();
        return view('laporan.laporan-pembatalan',compact('daftrm','dafbtl','byr','btl'));
    }
}

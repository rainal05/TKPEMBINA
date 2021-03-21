<?php

namespace App\Http\Controllers;
use PDF;
use App\Bukti;
use App\Data_calon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //SELURUH YG DAFTAR
        $all = Data_calon::all()->count();
        //DATA DITERIMA DAFTAR
        $terima = Data_calon::where('status', 'DITERIMA')->count();
        //BATAL MASUK
        $batal = Data_calon::where('status', 'BATAL')->count();
        //Bayar
        $byr = Data_calon::where('bayar', 'BAYAR')->count();
        //BELUM Bayar
        $blm = Data_calon::where('bayar', 'BELUM')->count();

        //untuk tombol tambah
        $dt = Data_calon::where('user_id', \Auth::user()->id)->first();
        $cek = Data_calon::where('user_id', \Auth::user()->id)->count();

        //tampilkan data si daftar
        $data = Data_calon::where('user_id', \Auth::user()->id)->get();
        return view('home', ['data' => $data], compact('cek','all','terima','byr','blm','batal'));
    }

    public function pdf()
    {
        //formulir
        $data = Data_calon::where('user_id', \Auth::user()->id)->get();
        $pdf = PDF::loadView('exportpdf.formulirpdf', ['data' => $data]);
        return $pdf->stream('FormulirCalonSiswa.pdf');
    }

}

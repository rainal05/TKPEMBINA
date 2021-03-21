<?php

namespace App\Http\Controllers;
use App\Data_calon;
use App\Kelas;
use App\Calon;
use App\Bukti;
use App\Buktistatus;
use App\Dokumen;
use App\Pelajaran;
use App\User;
use PDF;
use Illuminate\Http\Request;

class CalonController extends Controller
{
    //buat akun
    public function index()
    {
        return view('calon.daftarakun');
    }

    //tampil biodata pendaftar
    public function tampil()
    {
        //dak pakek
        $data = Data_calon::where('user_id', \Auth::user()->id)->get();
        return view('calon.tampil-biodata',['data' => $data]);
    }
//buat akun
    public function store(Request $request)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'nama' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|max:12',
            //same:password_confirmation|
        ], $massage);

        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();


        $request->request->add(['user_id' => $user->id]);
        $daftar = \App\Calon::create($request->all());
        return back()->with('notif','Akun Berhasil Dibuat, Silahkan Login');
    }

    //masuk isi biodata
    public function data()
    {
        //untuk edit
        $dt = Data_calon::where('user_id', \Auth::user()->id)->first();
        $cek = Data_calon::where('user_id', \Auth::user()->id)->count();
        return view('calon.isi-biodata', compact('dt','cek'));
    }

    //masuk isi bukti
    public function bayar()
    {
        //bukti bayar
        $dt = Bukti::where('user_id', \Auth::user()->id)->first();
        $cek = Bukti::where('user_id', \Auth::user()->id)->count();
        //status bayar
        $sts = Buktistatus::where('user_id', \Auth::user()->id)->count();
        //tampilkan status bayar
        $data = Buktistatus::where('user_id', \Auth::user()->id)->get();
        return view('calon.pembayaran',['data' => $data],compact('cek','sts'));
    }

    //isi bukti
    public function upbayar(Request $request, $id)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'bukti' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'pemilik' => 'required',
            'metode' => 'required',
        ], $massage);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('bukti');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'biodata_files';
        $file->move($tujuan_upload, $nama_file);

        Bukti::create([
            'user_id' => $request->user_id,
            'nama' => $request->nama,
            'bukti' => $nama_file,
            'pemilik' => $request->pemilik,
            'metode' => $request->metode,
            'data_calon_id' => $request->data_calon_id,
            ]);
        $data['bayar'] = $request->bayar;
        $data['updated_at'] = date('Y-m-d H:i:s');
        Data_calon::where('user_id', $id)->update($data);
        return redirect()->back()->with('notif', 'Pembayaran Berhasil');
    }

//tambah data BIODATA
    public function tambahdata(Request $request, $id)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'nama' => 'required',
            'panggilan' => 'required',
            'jk' => 'required',
            'tempat' => 'required',
            'ttl' => 'required',
            'nik' => 'required',
            'jalan' => 'required',
            'lurah' => 'required',
            'camat' => 'required',
            'kotakab' => 'required',
            'kodepos' => 'required',
            'jarak' => 'required',
            'transportasi' => 'required',
            'anakke' => 'required',
            'berat' => 'required',
            'tinggi' => 'required',
            'saudara' => 'required',
            'goldarah' => 'required',
            'penyakit' => 'required',
            'imunisasi' => 'required',
            'ayah' => 'required',
            'ttlayah' => 'required',
            'ibu' => 'required',
            'ttlibu' => 'required',
            'nokk' => 'required',
            'pendidikanayah' => 'required',
            'pendidikanibu' => 'required',
            'kerjaayah' => 'required',
            'kerjaibu' => 'required',
            'hpayah' => 'required',
            'hpibu' => 'required',
        ], $massage);


        $data['user_id'] = $id;
        $data['status'] = $request->status;
        $data['bayar'] = $request->bayar;
        $data['calon_id'] = $request->calon_id;
        $data['id_registrasi'] = 'REG-' . date('Ym-His');

        $data['nama'] = $request->nama;
        $data['panggilan'] = $request->panggilan;
        $data['jk'] = $request->jk;
        $data['tempat'] = $request->tempat;
        $data['ttl'] = $request->ttl;
        $data['nik'] = $request->nik;
        $data['jalan'] = $request->jalan;
        $data['lurah'] = $request->lurah;
        $data['camat'] = $request->camat;
        $data['kotakab'] = $request->kotakab;
        $data['kodepos'] = $request->kodepos;
        $data['jarak'] = $request->jarak;
        $data['transportasi'] = $request->transportasi;
        $data['agama'] = $request->agama;
        $data['warganegara'] = $request->warganegara;
        $data['anakke'] = $request->anakke;
        $data['berat'] = $request->berat;
        $data['tinggi'] = $request->tinggi;
        $data['saudara'] = $request->saudara;
        $data['goldarah'] = $request->goldarah;
        $data['penyakit'] = $request->penyakit;
        $data['imunisasi'] = $request->imunisasi;
        $data['cirikhusus'] = $request->cirikhusus;
        $data['ayah'] = $request->ayah;
        $data['ttlayah'] = $request->ttlayah;
        $data['ibu'] = $request->ibu;
        $data['ttlibu'] = $request->ttlibu;
        $data['nokk'] = $request->nokk;
        $data['pendidikanayah'] = $request->pendidikanayah;
        $data['pendidikanibu'] = $request->pendidikanibu;
        $data['kerjaayah'] = $request->kerjaayah;
        $data['kerjaibu'] = $request->kerjaibu;
        $data['hpayah'] = $request->hpayah;
        $data['hpibu'] = $request->hpibu;

        $data['created_at'] = date('Y-m-d H:i:s');
        //$data['updated_at'] = date('Y-m-d H:i:s');
        Data_calon::insert($data);

        return redirect('home')->with('notif','Data Anak Berhasil Disimpan');
    }

    //tambah data dokumen //idak pakek
    public function updokumen(Request $request, $id)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];
        $this->validate($request, [
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ], $massage);

        $file = $request->file('foto');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'biodata_files';
        $file->move($tujuan_upload, $nama_file);

        Dokumen::create([
            'foto' => $nama_file,
            'calondatas_id' => $request->calondatas_id,
        ]);
        return redirect('home');
    }

    //edit biodata
    public function updatedata(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'ttl' => 'required',
            'jk' => 'required',
        ]);

        //$data['user_id'] = $id;
        //$data['calon_id'] = $request->calon_id;
        $data['nama'] = $request->nama;
        $data['panggilan'] = $request->panggilan;
        $data['jk'] = $request->jk;
        $data['tempat'] = $request->tempat;
        $data['ttl'] = $request->ttl;
        $data['nik'] = $request->nik;
        $data['jalan'] = $request->jalan;
        $data['lurah'] = $request->lurah;
        $data['camat'] = $request->camat;
        $data['kotakab'] = $request->kotakab;
        $data['kodepos'] = $request->kodepos;
        $data['jarak'] = $request->jarak;
        $data['transportasi'] = $request->transportasi;
        $data['agama'] = $request->agama;
        $data['warganegara'] = $request->warganegara;
        $data['anakke'] = $request->anakke;
        $data['berat'] = $request->berat;
        $data['tinggi'] = $request->tinggi;
        $data['saudara'] = $request->saudara;
        $data['goldarah'] = $request->goldarah;
        $data['penyakit'] = $request->penyakit;
        $data['imunisasi'] = $request->imunisasi;
        $data['cirikhusus'] = $request->cirikhusus;
        $data['ayah'] = $request->ayah;
        $data['ttlayah'] = $request->ttlayah;
        $data['ibu'] = $request->ibu;
        $data['ttlibu'] = $request->ttlibu;
        $data['nokk'] = $request->nokk;
        $data['pendidikanayah'] = $request->pendidikanayah;
        $data['pendidikanibu'] = $request->pendidikanibu;
        $data['kerjaayah'] = $request->kerjaayah;
        $data['kerjaibu'] = $request->kerjaibu;
        $data['hpayah'] = $request->hpayah;
        $data['hpibu'] = $request->hpibu;

        $data['updated_at'] = date('Y-m-d H:i:s');

        Data_calon::where('user_id', $id)->update($data);
        return redirect('home')->with('notif', 'Data Anak Berhasil di Edit');
    }

    public function buktipdf()
    {
        $data = Bukti::where('user_id', \Auth::user()->id)->get();
        $pdf = PDF::loadView('exportpdf.buktipdf', ['data' => $data]);
        return $pdf->stream('KwitansiPembayaran.pdf');
    }
}

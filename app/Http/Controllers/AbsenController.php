<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$absen = DB::table('absen')
        ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('absen.*', 'pegawai.pegawai_nama')
        ->paginate(5);

    	// mengirim data pegawai ke view index
    	return view('absen.index',['absen' => $absen]);
    }
    // method untuk menampilkan view form tambah data absen
    public function tambah()
    {

    // memanggil view tambah
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        return view('absen.tambah', ['pegawai' => $pegawai]);

    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
            //DB::table()->insert();
            // insert data ke table absen pegawai
            DB::table('absen')->insert([
                'IDPegawai' => $request->IDPegawai,
                'Tanggal' => $request->tanggal,
                'Status' => $request->status
            ]);
            // alihkan halaman ke halaman absen pegawai
            return redirect('/absen');
    }
        // method untuk edit data absen pegawai
    public function edit($id)
    {
	// mengambil data absen pegawai berdasarkan id yang dipilih
	$absen = DB::table('absen')->where('ID',$id)->get();
    $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
    $judul = "Absen Pegawai" ;

	// passing data absen pegawai yang didapat ke view edit.blade.php
	return view('absen.edit',['absen' => $absen,'pegawai' => $pegawai,'judul' => $judul]);
    }
    public function view($id)
     {
         // mengambil data absen berdasarkan id yang dipilih
         $absen = DB::table('absen')->where('ID',$id)->get();
         // passing data absen yang didapat ke view edit.blade.php
         return view('absen.detail',['absen' => $absen]);

     }
    // update data absen pegawai
    public function update(Request $request)
    {
        // update data absen pegawai
        DB::table('absen')->where('ID',$request->id)->update([
                'IDPegawai' => $request->IDPegawai,
                'Tanggal' => $request->tanggal,
                'Status' => $request->status
        ]);
        // alihkan halaman ke halaman absen pegawai
        return redirect('/absen');
    }
    // method untuk hapus data absen pegawai
    public function hapus($id)
    {
        // menghapus data absen berdasarkan id yang dipilih
        DB::table('absen')->where('ID',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table absen sesuai pencarian data
        $absen = DB::table('absen')
        ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('absen.*', 'pegawai.pegawai_nama')
        ->where('pegawai_nama','like',"%".$cari."%")
      //  ->orWhere('Status','like',"%".$cari."%")
        ->paginate();

            // mengirim data absen ke view index
        return view('absen.index',['absen' => $absen]);

    }
}


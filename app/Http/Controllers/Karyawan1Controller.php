<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Karyawan1Controller extends Controller
{
    public function index()
    {
    	// mengambil data karyawan
    	$karyawan1 = DB::table('karyawan1')->get();
        //$sepatu = DB::table('sepatu')->paginate(5);

    	// mengirim data karyawan ke view index
    	return view('karyawan1.index',['karyawan1' => $karyawan1]);

    }
    // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {

        // memanggil view tambah
        return view('karyawan1.tambah');

    }
    // method untuk insert data karyawan
    public function store(Request $request)
    {
    // insert data ke table karyawan
    DB::table('karyawan1')->insert([
        'NIP' => $request->nip,
        'Nama' => $request->nama,
        'Pangkat' => $request->pangkat,
        'Gaji'=> $request->gaji
    ]);
    // alihkan halaman ke halaman karyawan
    return redirect('/karyawan1');
    }
    // method untuk hapus data karyawan
    public function hapus($id)
    {
    // menghapus data karyawan berdasarkan id yang dipilih
    DB::table('karyawan1')->where('NIP',$id)->delete();

    // alihkan halaman ke halaman karyawan
    return redirect('/karyawan1');
    }
}

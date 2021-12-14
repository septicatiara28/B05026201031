@extends('layout.ceria')

@section('isikonten')

@section('title', 'DETAIL DATA ABSEN PEGAWAI')

	<h3>Detail Absen Pegawai</h3>

	<a href="/absen" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $p)
        <div class="form-group">
            <label for="pegawai">IDPegawai</label>
            <label>{{ $p->IDPegawai }}</label>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <label>{{ $p->Tanggal }}</label>
        </div>
        <div class="form-group">
            <label for="Status">Status</label>
            <label>{{ $p->Status }}</label>
        </div>


	@endforeach
    @endsection

@extends('layout.ceria')

@section('isikonten')

@section('title', 'DETAIL DATA PEGAWAI')

	<h3>Detail Pegawai</h3>

	<a href="/pegawai" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
        <div class="form-group">
            <label for="jabatan">Nama</label>
            <label>{{ $p->pegawai_nama }}</label>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <label>{{ $p->pegawai_jabatan }}</label>
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <label>{{ $p->pegawai_umur }}</label>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <label>{{ $p->pegawai_alamat }}</label>
        </div>

	@endforeach
    @endsection

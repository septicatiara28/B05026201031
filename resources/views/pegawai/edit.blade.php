@extends('layout.ceria')

@section('isikonten')

@section('title', 'EDIT DATA PEGAWAI')

	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group">
            <label for="jabatan">Nama</label>
            <input class="form-control" type="text" name="nama"  required="required" value="{{ $p->pegawai_nama }}">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input class="form-control" type="text" name="jabatan"  required="required"  value="{{ $p->pegawai_jabatan }}">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input class="form-control" type="number" name="umur"  required="required" value="{{ $p->pegawai_umur }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input class="form-control" type="text" name="alamat"  required="required" value="{{ $p->pegawai_alamat }}">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach
    @endsection

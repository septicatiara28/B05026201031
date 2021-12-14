@extends('layout.ceria')

@section('isikonten')

@section('title', 'TAMBAH DATA PEGAWAI')

	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="form-group">
            <label for="jabatan">Nama</label>
            <input class="form-control" type="text" name="nama"  required="required">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input class="form-control" type="text" name="jabatan"  required="required">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input class="form-control" type="number" name="umur"  required="required">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input class="form-control" type="text" name="alamat"  required="required">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Simpan Data">
        </div>

	</form>
@endsection


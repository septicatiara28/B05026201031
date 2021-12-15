@extends('layout.ceria')

@section('isikonten')

@section('title', 'TAMBAH DATA KARYAWAN')

	<h3>List KARYAWAN</h3>

	<a href="/karyawan1" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan1/store" method="post">
		{{ csrf_field() }}
            <div class="form-group">
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input class="form-control" type="text" name="nip"  required="required">
                </div>
                <label for="nama">Nama</label>
                <input class="form-control" type="text" name="nama"  required="required">
            </div>
            <div class="form-group">
                <label for="pangkat">Pangkat</label>
                <input class="form-control" type="text" name="pangkat"  required="required">
            </div>
            <div class="form-group">
                <label for="gaji">Gaji</label>
                <input class="form-control" type="number" name="gaji"  required="required">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Simpan Data">
            </div>

	</form>
@endsection


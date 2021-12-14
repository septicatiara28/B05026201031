@extends('layout.ceria')

@section('isikonten')

@section('title', 'DATA ABSEN PEGAWAI')

	<h2>Data Absen Pegawai</h2>

	<a href="/absen/tambah" class="btn btn-danger"> + Tambah Absen Pegawai Baru</a>

	<br/>
	<br/>

    <p align="center">Cari Data Absen berdasarkan Nama Pegawai :</p>
	<form action="/absen/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Absen Pegawai .." value="{{ old('cari') }}">
		<input type="submit" class="form-control btn-warning" value="CARI">
	</form><br>

	<table class="table table-success table-striped">
		<tr class="table-info">
            <th>No.</th>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama}}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
                <a href="/absen/detail/{{ $p->ID }}"  class="btn btn-default">View Detail</a>
				<a href="/absen/edit/{{ $p->ID }}"  class="btn btn-primary">Edit</a>
				<a href="/absen/hapus/{{ $p->ID }}"  class="btn btn-success">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links()  }}
@endsection

@extends('layout.ceria')

@section('isikonten')

@section('title', 'DATA PEGAWAI')

	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-danger"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

    <p align="center">Cari Data Pegawai berdasarkan nama dan alamat :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" class="form-control btn-warning" value="CARI">
	</form><br>

	<table class="table table-success table-striped">
		<tr class="table-info">
            <th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-default">View Detail</a>|
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-primary">Edit</a>|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-success">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links()  }}

@endsection


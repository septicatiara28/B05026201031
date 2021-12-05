<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
    @extends('layout.ceria')
    @section('isikonten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-danger"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-success">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
</body>
</html>



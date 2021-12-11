<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
    @extends('layout.ceria')
    @section('isikonten')
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-danger"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <div class="container" align='center'>
    <p>Cari Data Pegawai berdasarkan nama :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" class="form-control btn-success" value="CARI">
	</form></div><br>
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
    {{ $pegawai->links()  }}
</body>
</html>
@endsection


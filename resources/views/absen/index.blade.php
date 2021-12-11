<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
    @extends('layout.ceria')
    @section('isikonten')

	<h2>Data Absen Pegawai</h2>

	<a href="/absen/tambah" class="btn btn-danger"> + Tambah Absen Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}"  class="btn btn-warning">Edit</a>
				<a href="/absen/hapus/{{ $p->ID }}"  class="btn btn-success">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
@endsection

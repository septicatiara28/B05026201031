@extends('layout.ceria')

@section('isikonten')

@section('title', 'DATA KARYAWAN')

	<h3>Daftar Data Karyawan</h3>

	<a href="/karyawan1/tambah" class="btn btn-danger"> + Tambah Data Karyawan Baru</a>

	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr class="table-info">
            <th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
            <th>Opsi</th>

		</tr>
		@foreach($karyawan1 as $p)
		<tr>
            <td>{{ $p->NIP }}</td>
            <td>{{ $p->Nama }}</td>
            <td>{{ $p->Pangkat }}</td>
            <td>{{ number_format($p->Gaji) }}</td>

			<td>

				<a href="/karyawan1/hapus/{{ $p->NIP }}" class="btn btn-success">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


@endsection


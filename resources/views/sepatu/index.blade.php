@extends('layout.ceria')

@section('isikonten')

@section('title', 'DATA SEPATU')

	<h3>Daftar Merk Sepatu</h3>

	<a href="/sepatu/tambah" class="btn btn-danger"> + Tambah List Sepatu Baru</a>

	<br/>
	<br/>

    <p align ="center">Cari Data Sepatu berdasarkan merk :</p>
	<form action="/sepatu/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Merk Sepatu .." value="{{ old('cari') }}">
		<input type="submit" class="form-control btn-warning" value="CARI">
	</form><br>

	<table class="table table-success table-striped">
		<tr class="table-info">
            <th>No.</th>
            <th>Kode Sepatu</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
            <th>Opsi</th>

		</tr>
		@foreach($sepatu as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->kodesepatu }}</td>
            <td>{{ $p->merksepatu }}</td>
            <td>{{ $p->stocksepatu }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a href="/sepatu/detail/{{ $p->kodesepatu }}" class="btn btn-default">View Detail</a>|
				<a href="/sepatu/edit/{{ $p->kodesepatu }}" class="btn btn-primary">Edit</a>|
				<a href="/sepatu/hapus/{{ $p->kodesepatu }}" class="btn btn-success">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $sepatu->links()  }}

@endsection


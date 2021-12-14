@extends('layout.ceria')

@section('isikonten')

@section('title', 'DETAIL DATA SEPATU')

	<h3>Detail Sepatu</h3>

	<a href="/sepatu" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepatu as $p)
        <div class="form-group">
            <label for="kodesepatu">Kode Sepatu</label>
            <label>{{ $p->kodesepatu }}</label>
        </div>
        <div class="form-group">
            <label for="merk">Merk</label>
            <label>{{ $p->merksepatu }}</label>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <label>{{ $p->stocksepatu }}</label>
        </div>
        <div class="form-group">
            <label for="tersedia">Tersedia</label>
            <label>{{ $p->tersedia }}</label>
        </div>

	@endforeach
    @endsection

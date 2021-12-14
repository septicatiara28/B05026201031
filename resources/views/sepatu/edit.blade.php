@extends('layout.ceria')

@section('isikonten')

@section('title', 'EDIT DATA SEPATU')

	<h3>Edit Data Sepatu</h3>

	<a href="/sepatu" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepatu as $p)
	<form action="/sepatu/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodesepatu }}"> <br/>
        <div class="form-group">
            <label for="kode">Kode</label>
            <input class="form-control" type="number" name="kode"  required="required" value="{{ $p->kodesepatu }}">
        </div>
        <div class="form-group">
            <label for="merk">Merk</label>
            <input class="form-control" type="text" name="merk"  required="required" value="{{ $p->merksepatu }}">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input class="form-control" type="number" name="stock"  required="required" value="{{ $p->stocksepatu}}">
        </div>
        <div class="form-group">
            <label for="tersedia">Tersedia</label>
            <input type="radio" id="tersedia" name="tersedia" value="Y" @if ($p->tersedia === "Y") checked="checked" @endif>
            <label for="tersedia">YA</label>
            <input type="radio" id="tidak" name="tersedia" value="N" @if ($p->tersedia === "N") checked="checked" @endif>
            <label for="tidak">TIDAK</label><br>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Simpan Data">
        </div>

	</form>
	@endforeach
    @endsection

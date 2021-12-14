@extends('layout.ceria')

@section('isikonten')

@section('title', 'TAMBAH DATA SEPATU')

	<h3>List Sepatu</h3>

	<a href="/sepatu" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>

	<form action="/sepatu/store" method="post">
		{{ csrf_field() }}

            <div class="form-group">
                <label for="merk">Merk</label>
                <input class="form-control" type="text" name="merk"  required="required">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input class="form-control" type="number" name="stock"  required="required">
            </div>
            <div class="form-group">
                <label for="tersedia">Tersedia</label>
                <input type="radio" id="tersedia" name="tersedia" value="Y">
                <label for="tersedia">YA</label>
                <input type="radio" id="tidak" name="tersedia" value="N" checked="checked">
                 <label for="tidak">TIDAK</label><br>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Simpan Data">
            </div>

	</form>
@endsection


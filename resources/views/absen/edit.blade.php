@extends('layout.ceria')

@section('isikonten')

@section('title', 'EDIT ABSEN PEGAWAI')

@section('judulhalaman', 'EDIT ABSEN')


<h1>{{ $judul }}</h1>
	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        <div class="container">
            <div class="row">
                <label for="pegawai">Pegawai:</label>
                <select id="IDPegawai" name="IDPegawai" required="required">
                    @foreach($pegawai as $peg)
                    <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div><br>
            <div class="row">
                <label for="dtpickerdemo">Tanggal :</label>
                <div class='col-sm-3 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" value="{{ $p->Tanggal }}"/>
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
                </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                        });
                    </script>
            </div><br>
            <div class="row">
                <label for="status" class="col-sm-1 control-label">Status:</label>
                <input type="radio" id="hadir" name="status" value="H" @if ($p->Status === "H") checked="checked" @endif>
                <label for="hadir">HADIR</label>
                <input type="radio" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
                 <label for="tidak">TIDAK HADIR</label><br>
            </div>
            <div class="row">
                <div class="button text-left">
                    <button class="btn-primary submit" type="submit">Simpan Data</button>
                </div>
            </div>
        </div>
	</form>

	@endforeach
    @endsection



@extends('layout.ceria')

@section('title', 'TAMBAH ABSEN PEGAWAI')

@section('isikonten')

	<h3>Absen Pegawai</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
        <div class="container">
            <div class="row">
                <label for="pegawai">Pegawai:</label>
                <select id="IDPegawai" name="IDPegawai" required="required">
                    @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div><br>
            <div class="row">
                <label for="dtpickerdemo" >Tanggal :</label>
                <div class='col-sm-3 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" />
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
                <input type="radio" id="hadir" name="status" value="H">
                <label for="hadir">HADIR</label>
                <input type="radio" id="tidak" name="status" value="T" checked="checked">
                 <label for="tidak">TIDAK HADIR</label><br>
            </div>
            <div class="row">
                <div class="button text-left">
                    <button class="btn-primary submit" type="submit">Simpan Data</button>
                </div>
            </div>
        </div>
	</form>
@endsection


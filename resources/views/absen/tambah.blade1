@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Absen Pegawai</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		Pegawai <select id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br>
            <div class="form-group">
                <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                    <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
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
                <br>
            Status
        <input type="radio" id="hadir" name="status" value="H">
  <label for="hadir">HADIR</label><br>
  <input type="radio" id="tidak" name="status" value="T" checked="checked">
  <label for="tidak">TIDAK HADIR</label><br>
		<input type="submit" value="Simpan Data">
	</form>

@endsection


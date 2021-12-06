@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')
@section('isikonten')

	@section('judulHalaman','Tambah')
	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		Pegawai <select id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br>
        <label for="dtpickerdemo" class="lab-tambah">Tanggal: </label>
        <div class='col-sm-4 input-group date' id='dtpickerdemo'>
            <input type='text' class="form-control" name="tanggal" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
            });
        </script>

        Status
                <input type="radio" id="hadir" name="status" value="H">
                <label for="hadir">HADIR</label><br/>
                <input type="radio" id="tidak" name="status" value="T">
  <label for="tidak">TIDAK HADIR</label><br/>
		<input type="submit" value="Simpan Data">
        <a class="linktitle" href="/absen">Kembali</a>
	</form>
@endsection

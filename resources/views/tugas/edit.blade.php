@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT Tugas')


	<br/>
	<br/>

	@foreach($Tugas as $T)
	<form action="/Tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $T->ID }}"> <br/>
        IDPegawai <input type="number" name="IDPegawai" required="required" value="{{ $T-> IDPegawai }}"> <br/>

        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal" value="{{ $T->Tanggal }}"/>
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

        Nama Tugas<input type="text" name="NamaTugas" required="required" maxlength="50" value="{{ $T->NamaTugas}}"> <br/>
        Status<input type="text" name="Status" required="required" maxlength="1" value="{{$T -> Status}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
    <a href="/Tugas"> Kembali</a>
    @endsection


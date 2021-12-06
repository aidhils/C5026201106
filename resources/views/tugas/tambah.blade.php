@extends('layout.ceria')

@section('title', 'Tambah Tugas')
@section('isikonten')

	@section('judulHalaman','Tambah')

	<form action="/Tugas/store" method="post">
		{{ csrf_field() }}
		ID <input type="number" name="ID" required="required"> <br/>
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Tanggal<input type="datetime-local" name="Tanggal" required="required"> <br/>
		Nama Tugas<input type="text" name="NamaTugas" required="required" maxlength="50"></textarea> <br/>
        Status<input type="text" name="Status" required="required" maxlength="1"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    <a href="/Tugas"> Kembali</a>
    @endsection


<!DOCTYPE html>
<html>
<head>
	<title>AIDHIL AKBAR NURDIN 5026201106</title>
</head>
<body>

	<H1>Aidhil Akbar Nurdin : 5026201106 </h1>
	<h3>Edit Pegawai</h3>

	<a href="/Tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($Tugas as $T)
	<form action="/Tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $T->ID }}"> <br/>
        IDPegawai <input type="number" name="IDPegawai" required="required" value="{{ $T-> IDPegawai }}"> <br/>
        Tanggal<input type="datetime-local" name="Tanggal" required="required" value="{{ $T-> Tanggal }}"> <br/>
        Nama Tugas<input type="text" name="NamaTugas" required="required" maxlength="50" value="{{ $T->NamaTugas}}"> <br/>
        Status<input type="text" name="Status" required="required" maxlength="1" value="{{$T -> Status}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>

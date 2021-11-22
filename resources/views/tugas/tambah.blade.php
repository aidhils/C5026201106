<!DOCTYPE html>
<html>
<head>
	<title>AIDHIL AKBAR NURDIN 5026201106</title>
</head>
<body>

	<H1>Aidhil Akbar Nurdin : 5026201106 </h1>
	<h3>Data Pegawai</h3>

	<a href="/Tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/Tugas/store" method="post">
		{{ csrf_field() }}
		ID <input type="number" name="ID" required="required"> <br/>
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Tanggal<input type="datetime-local" name="Tanggal" required="required"> <br/>
		Nama Tugas<input type="text" name="NamaTugas" required="required" maxlength="50"></textarea> <br/>
        Status<input type="text" name="Status" required="required" maxlength="1"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>

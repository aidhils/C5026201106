<!DOCTYPE html>
<html>
<head>
	<title>AIDHIL AKBAR NURDIN 5026201106</title>
</head>
<body>

	<H1>Aidhil Akbar Nurdin : 5026201106 </h1>

	<a href="/Tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Tanggal </th>
			<th>Nama Tugas</th>
			<th>Status </th>
            <th>Opsi</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td>{{ $t->ID}}</td>
			<td>{{ $t->IDPegawai }}</td>
			<td>{{ $t->Tanggal }}</td>
            <td>{{ $t->NamaTugas}}</td>
			<td>{{ $t->Status }}</td>
			<td>
				<a href="/Tugas/edit/{{ $t->ID}}">Edit</a>
				|
				<a href="/Tugas/hapus/{{ $t->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>

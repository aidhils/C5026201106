@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')
@section('isikonten')

	@section('judulHalaman','Index')
	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1" class="table table-success table-striped">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}"class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <a class="linktitle" href="/pegawai">Kembali</a>
    @endsection

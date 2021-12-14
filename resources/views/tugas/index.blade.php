@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')
@section('isikonten')

	@section('judulHalaman','Tugas')

    <a href="/Tugas/tambah" class="btn btn-primary" > + Tambah Tugas Baru</a>

	<br/>
	<br/>

    <table class="table table-bordered">
		<tr>
			<th class="text-center thindex">Nama Pegawai</th>
			<th class="text-center thindex">Tanggal </th>
			<th class="text-center thindex">Nama Tugas</th>
			<th class="text-center thindex">Status </th>
            <th class="text-center thindex">Opsi</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td class="tdindex">{{ $t->pegawai_nama}}</td>
			<td class="tdindex">{{ $t->Tanggal }}</td>
            <td class="tdindex">{{ $t->NamaTugas}}</td>
			<td class="tdindex">{{ $t->Status }}</td>
            <td class="tdindex">
                <div class="row">
                    <div class="col-sm-2"></div>
                <a href="/Tugas/view/{{ $t->ID}}" class="btn btn-warning col-sm-2">View Detail</a>
                <div class="col-sm-1"></div>
				<a href="/Tugas/edit/{{ $t->ID }}" class="btn btn-warning col-sm-2" >Edit</a>
                <div class="col-sm-1"></div>
				<a href="/Tugas/hapus/{{ $t->ID }}" class="btn btn-danger col-sm-2" >Hapus</a>
                <div class="col-sm-2"></div>
            </div>
            </td>
		</tr>
		@endforeach
	</table>
    {{ $tugas -> links() }}

    <a class="linktitle mt-4" href="/Tugas">Kembali</a>


@endsection

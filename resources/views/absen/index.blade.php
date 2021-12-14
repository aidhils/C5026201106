@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')
@section('isikonten')

	@section('judulHalaman','Absen')
	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-bordered">
		<tr>
			<th class="text-center thindex">Nama Pegawai</th>
			<th class="text-center thindex">Tanggal</th>
			<th class="text-center thindex thstatus">Status</th>
			<th class="text-center thindex">Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td class="tdindex">{{ $p->pegawai_nama}}</td>
			<td class="tdindex">{{ $p->Tanggal }}</td>
			<td class="tdindex text-center">{{ $p->Status }}</td>
			<td class="tdindex">
                <div class="row">
                    <div class="col-sm-2"></div>
                <a href="/absen/view/{{ $p->ID}}" class="btn btn-warning col-sm-2">View Detail</a>
                <div class="col-sm-1"></div>
				<a href="/absen/edit/{{ $p->ID }}" class="btn btn-warning col-sm-2" >Edit</a>
                <div class="col-sm-1"></div>
				<a href="/absen/hapus/{{ $p->ID }}" class="btn btn-danger col-sm-2" >Hapus</a>
                <div class="col-sm-2"></div>
            </div>
            </td>
		</tr>
		@endforeach
	</table>


    <a class="linktitle" href="/absen">Kembali</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @endsection

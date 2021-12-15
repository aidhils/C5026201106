@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')
@section('isikonten')

	@section('judulHalaman','Pegawai Index')


        <a href="/pegawai/tambah" class="btn btn-primary" > + Tambah Pegawai Baru</a>



            <div class="row float-right mr-4 no-gutters">
                <div class="col-sm-5">
            <p class="mt-1">Cari Data Pegawai :</p>
                </div>


                <div class="col-sm-7">
            <form action="/pegawai/cari" method="GET">
                <div class="row">

                <input type="text" name="cari" class="form-control col-sm-9" placeholder="Cari Pegawai .." value="{{ old('cari') }}">

                <div class="col-sm-3">
                <input type="submit" class="btn btn-info" value="CARI">
                </div>

                </div>
            </form>
        </div>


            </div>





	<table class="table table-bordered">
		<tr>
			<th class="text-center thindex">Nama</th>
			<th class="text-center thindex">Jabatan</th>
			<th class="text-center thindex">Umur</th>
			<th class="text-center thindex">Alamat</th>
			<th class="text-center thindex">Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td class="tdindex">{{ $p->pegawai_nama }}</td>
			<td class="tdindex">{{ $p->pegawai_jabatan }}</td>
			<td class="tdindex">{{ $p->pegawai_umur }}</td>
			<td class="tdindex">{{ $p->pegawai_alamat }}</td>
			<td class="tdindex">
                <div class="row">
                    <div class="col-sm-1"></div>
                <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-warning col-sm-3">View Detail</a>
                <div class="col-sm-1"></div>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning col-sm-2">Edit</a>
                <div class="col-sm-1"></div>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}"class="btn btn-danger col-sm-2">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}
    @endsection

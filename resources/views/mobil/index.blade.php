@extends('layout.ceria')

@section('title', 'Mobil')
@section('isikonten')

	@section('judulHalaman','Database Mobil')
	<a href="/mobil/tambah" class="btn btn-primary" > + Tambah Mobil Baru</a>

    <div class="row float-right mr-4 no-gutters">
        <div class="col-sm-5">
    <p  class="mt-1">Cari Data Pegawai :</p>
        </div>
        <div class="col-sm-7">
    <form action="/mobil/cari" method="GET">
        <div class="row">


        <input type="text" name="cari" class="form-control col-sm-9" placeholder="Cari mobil .." value="{{ old('cari') }}">
        <div class="col-sm-3">
        <input type="submit" class="btn btn-info" value="CARI">
    </div>

</div>
    </form>
</div>


</div>


	<table class="table table-bordered">
		<tr>
			<th class="text-center thindex">Kode Mobil</th>
			<th class="text-center thindex">Merk Mobil</th>
			<th class="text-center thindex">Stock Mobil</th>
			<th class="text-center thindex">Tersedia</th>
			<th class="text-center thindex">Opsi</th>
		</tr>
		@foreach($mobil as $m)
		<tr>
			<td class="tdindex">{{ $m->kodemobil}}</td>
			<td class="tdindex">{{ $m->merkmobil }}</td>
			<td class="tdindex">{{ $m->stockmobil }}</td>
			<td class="tdindex">{{ $m->tersedia }}</td>
			<td class="tdindex">
                <div class="row">
                    <div class="col-sm-2"></div>
                <a href="/mobil/view/{{ $m->kodemobil}}" class="btn btn-warning col-sm-2">View Detail</a>
                <div class="col-sm-1"></div>
				<a href="/mobil/edit/{{ $m->kodemobil}}"  class="btn btn-warning col-sm-2" >Edit</a>
                <div class="col-sm-1"></div>
				<a href="/mobil/hapus/{{ $m->kodemobil}}" class="btn btn-danger col-sm-2">Hapus</a>
                </div>
            </td>
		</tr>
		@endforeach
	</table>

    {{ $mobil->links() }}
    @endsection

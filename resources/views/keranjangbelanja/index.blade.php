@extends('layout.ceria')

@section('title', 'Keranjang Belanja')
@section('isikonten')

	@section('judulHalaman','Index Keranjang Belanja')


        <a href="/keranjangbelanja/tambah" class="btn btn-primary" > + Tambah Belanja</a>



            <div class="row float-right mr-4 no-gutters">
                <div class="col-sm-5">
            <p class="mt-1">Cari Data Belanja:</p>
                </div>


                <div class="col-sm-7">
            <form action="/pegawai/cari" method="GET">
                <div class="row">

                <input type="text" name="cari" class="form-control col-sm-9" placeholder="Cari Belanja.." value="{{ old('cari') }}">

                <div class="col-sm-3">
                <input type="submit" class="btn btn-info" value="CARI">
                </div>

                </div>
            </form>
        </div>


            </div>


	<table class="table table-bordered">
		<tr>
			<th class="text-center thindex">Kode Pembelian</th>
			<th class="text-center thindex">Kode Barang</th>
			<th class="text-center thindex">Jumlah Pembelian</th>
			<th class="text-center thindex">Harga per Item</th>
            <th class="text-center thindex">Total</th>
			<th class="text-center thindex">Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
			<td class="tdindex">{{ $k->ID }}</td>
			<td class="tdindex">{{ $k-> KodeBarang }}</td>
			<td class="tdindex">{{ $k-> Jumlah }}</td>
			<td class="tdindex">{{ $k->Harga }}</td>
            <td class="tdindex">{{ number_format($k-> Jumlah * $k->Harga) }}</td>
			<td class="tdindex">
                <div class="row">
                    <div class="col-sm-2"></div>

				<a href="/keranjangbelanja/edit/{{ $k->ID}}" class="btn btn-warning col-sm-2">Tambah</a>
                <div class="col-sm-1"></div>
				<a href="/keranjangbelanja/hapus/{{ $k->ID}}"class="btn btn-danger col-sm-2">Hapus</a>
                <div class="col-sm-2"></div>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $keranjangbelanja->links() }}
    @endsection

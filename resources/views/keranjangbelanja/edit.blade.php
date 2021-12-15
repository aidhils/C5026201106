@extends('layout.ceria')

@section('title', 'Edit Keranjang')

@section('isikonten')

@section('judulhalaman', 'EDIT Keranjang')


	@foreach($keranjangbelanja as $k)
	<form action="/keranjangbelanja/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $k->ID }}">
        <div class="row form-group">

			<label for="KodeBarang" class="col-sm-1 formvar text-center">
				Kode Barang
			</label>

			<input type="text" class="form-control col-sm-4" name="KodeBarang" value="{{ $k-> KodeBarang }}" required="required"> <br/>

		</div>

		<div class="row form-group">
			<label for="Jumlah" class="col-sm-1 formvar text-center">
				Jumlah
			</label>
				<input type="text" class="form-control col-sm-4" name="Jumlah" value="{{ $k-> Jumlah }}" required="required">
		</div>


		<div class="row form-group">
			<label for="Harga" class="col-sm-1 formvar text-center">
                Harga
			</label>
				<input type="text" class="form-control col-sm-4" name="Harga" value="{{ $k-> Harga }}" required="required">
		</div>



        <input type="submit" value="Simpan Data" class="btn btn-secondary"> <br/>
        <a class="linktitle mt-4" href="/keranjangbelanja">Kembali</a>

	</form>
	@endforeach
    <a class="linktitle mt-4 ml-2"href="/mobil"> Kembali</a>
    @endsection

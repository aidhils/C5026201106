@extends('layout.ceria')

@section('title', 'Tambah Belanja')
@section('isikonten')

	@section('judulHalaman','Tambah')

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}

        <div class="row form-group">

			<label for="kodebarang" class="col-sm-1 formvar text-center">
				Kode Barang
			</label>

			<input type="text" class="form-control col-sm-4" name="kodebarang" required="required"> <br/>

		</div>

		<div class="row form-group">
			<label for="jumlah" class="col-sm-1 formvar text-center">
				Jumlah
			</label>
				<input type="text" class="form-control col-sm-4" name="jumlah" required="required">
		</div>


		<div class="row form-group">
			<label for="harga" class="col-sm-1 formvar text-center">
                Harga
			</label>
				<input type="text" class="form-control col-sm-4" name="harga" required="required">
		</div>



        <input type="submit" value="Simpan Data" class="btn btn-secondary"> <br/>
        <a class="linktitle mt-4" href="/keranjangbelanja">Kembali</a>

	</form>

    @endsection

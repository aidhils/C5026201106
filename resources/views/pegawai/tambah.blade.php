@extends('layout.ceria')

@section('title', 'TambahPEGAWAI')
@section('isikonten')

	@section('judulHalaman','Tambah')

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="row form-group">

			<label for="nama" class="col-sm-1 formvar text-center">
				Nama
			</label>

			<input type="text" class="form-control col-sm-4" name="nama" required="required"> <br/>

		</div>

		<div class="row form-group">
			<label for="jabatan" class="col-sm-1 formvar text-center">
				Jabatan
			</label>
				<input type="text" class="form-control col-sm-4" name="jabatan" required="required">
		</div>

        <div class="row form-group">
            <label for="umur" class="col-sm-1 formvar text-center">
            Umur
            </label>
            <input type="number" class="form-control col-sm-4" name="umur" required="required">

        </div>

        <div class="row form-group">
            <label for="Alamat" class="col-sm-1 formvar text-center">
	    	Alamat
            </label>
         <textarea name="alamat"  class="form-control col-sm-4"  required="required"></textarea> <br/>
        </div>


        <input type="submit" value="Simpan Data" class="btn btn-secondary"> <br/>
        <a class="linktitle mt-4" href="/pegawai">Kembali</a>

	</form>

    @endsection

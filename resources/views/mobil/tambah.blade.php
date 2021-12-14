@extends('layout.ceria')

@section('title', 'Mobil')
@section('isikonten')

	@section('judulHalaman','Tambah Mobil')

	<form action="/mobil/store" method="post">
		{{ csrf_field() }}

        <div class="row form-group">

			<label for="merkmobil" class="col-sm-1 formvar text-center">
				Merk Mobil
			</label>

			<input type="text" class="form-control col-sm-4 mt-4" name="merkmobil" required="required"> <br/>

		</div>

		<div class="row form-group">
			<label for="stockmobil" class="col-sm-1 formvar text-center">
				Stock Mobil
			</label>
				<input type="number" class="form-control col-sm-4 mt-4" name="stockmobil" required="required">
		</div>

        <div class="row form-group">
            <label for="tersedia" class="col-sm-1 formvar">Tersedia?</label>


            <div class="col-sm-8">
                <div class="row mt-1">
                    <div class="col-sm-2">

                        <input type="radio" class="custom-control-input" id="ya" name="tersedia" value="T">
                        <label for="ya" class="custom-control-label statuslabel">Tersedia</label>
                    </div>
                        <div class="col-sm-2">
                        <input type="radio" id="tidak" class="custom-control-input" name="tersedia" value="A">
                        <label for="tidak" class="custom-control-label statuslabel">Tidak Tersedia</label>
                    </div>
                </div>
            </div>
        </div>



        <input type="submit" value="Simpan Data" class="btn btn-secondary"> <br/>
        <a class="linktitle mt-4" href="/mobils">Kembali</a>

	</form>

    @endsection

@extends('layout.ceria')

@section('title', 'Mobil')

@section('isikonten')

@section('judulhalaman', 'EDIT Mobil')


	@foreach($mobil as $m)
	<form action="/mobil/update" method="post">
		{{ csrf_field() }}

        <div class="row form-group">
            <label for="kodemobil" class="col-sm-1 formvar text-center">Kode Mobil </label>
            <input type="text" name="kodemobil" class="form-control col-sm-4 mt-4"  required="required" value="{{ $m-> kodemobil }}" readonly> <br/>
        </div>
        <div class="row form-group">
            <label for="merkmobil" class="col-sm-1 formvar text-center">Merk Mobil </label>
           <input type="text" Class="form-control col-sm-4 mt-4"  name="merkmobil" required="required" maxlength="50" value="{{$m-> merkmobil }}"> <br/>
        </div>
            <div class="row form-group">
                <label for="stockmobil" class="col-sm-1 formvar text-center">Stock Mobil </label>
         <input type="number" Class="form-control col-sm-4 mt-4"  name="stockmobil" required="required" value="{{$m-> stockmobil }}"> <br/>
            </div>
        <div class="row form-group">
            <label for="tersedia" class="col-sm-1 formvar">Tersedia?</label>


            <div class="col-sm-8">
                <div class="row mt-1">
                    <div class="col-sm-2">
                        <input type="radio"class="custom-control-input"  id="ya" name="tersedia" value="T" required>
                        <label class="custom-control-label statuslabel" for="ya">Tersedia</label>
                    </div>
                        <div class="col-sm-2">
                        <input type="radio" class="custom-control-input" id="tidak" name="tersedia" value="A">
                        <label class="custom-control-label statuslabel" for="tidak">Tidak Tersedia</label>
                    </div>
                 </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success ml-2">
	</form>
	@endforeach
    <a class="linktitle mt-4 ml-2"href="/mobil"> Kembali</a>
    @endsection


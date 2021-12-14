@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT ABSEN')

<h1>{{ $judul }}</h1>
	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->ID }}">
        <div class="row form-group">
            <label for="IDPegawai" class="col-sm-1 formvar text-center">Pegawai</label>
         <select class="form-control col-sm-4" id="IDPegawai" name="IDPegawai" required="required">
            @foreach($pegawai as $peg)
                <option class="selop" value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
            @endforeach
        </select>

        </div>

        <div class="row form-group">
            <label for="tanggal" class="col-sm-1 formvar" >Tanggal</label>
         <input step="1" class="form-control col-sm-6" type="datetime-local" id="tanggal" name="tanggal" value="{{ $p->Tanggal}}">
        </div>


        <div class="row form-group">
            <label for="status" class="col-sm-1 formvar">Status</label>

            <div class="col-sm-8">
                <div class="row mt-1">
                    <div class="col-sm-2">
        <input type="radio"class="custom-control-input" id="hadir" name="status" value="H" @if ($p->Status === "H") checked="checked" @endif>
        <label class="custom-control-label statuslabel"for="hadir">HADIR</label>
                    </div>
                    <div class="col-sm-2">
        <input type="radio" class="custom-control-input" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
        <label class="custom-control-label statuslabel" for="tidak">TIDAK HADIR</label><br>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success ml-2">
	</form>
	@endforeach
    <a class="linktitle mt-4 ml-2" href="/absen"> Kembali</a>

    @endsection

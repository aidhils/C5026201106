@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT Tugas')


	<br/>
	<br/>

	@foreach($Tugas as $T)
	<form action="/Tugas/update" method="post">
		{{ csrf_field() }}
        <div class="row form-group">
            <label for="IDPegawai" class="col-sm-1 formvar text-center">Pegawai</label>


            <select class="form-control col-sm-4" id="IDPegawai" name="IDPegawai" required="required">
                @foreach($pegawai as $peg)
                <option class="selop" value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $T->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                @endforeach
                </select>
        </div>

        <div class="row form-group">
            <label for="tanggal" class="col-sm-1 formvar" >Tanggal</label>
         <input step="1" class="form-control col-sm-6" type="datetime-local" id="tanggal" name="tanggal" value="{{ date('Y-m-d\TH:i',strtotime( $T -> Tanggal)) }}">
        </div>

        <div class="row form-group">
            <label for="NamaTugas" class="col-sm-1 formvar" >Nama Tugas</label>
            <input type="text" name="NamaTugas"  class="form-control col-sm-6 mt-4"  required="required" maxlength="50" value="{{ $T->NamaTugas}}">
          </div>


          <div class="row form-group">
            <label for="status" class="col-sm-1 formvar">Status</label>


            <div class="col-sm-8">
                <div class="row mt-1">
                    <div class="col-sm-2">

                        <input type="radio" class="custom-control-input" id="hadir" name="Status" value="S"  @if ($T->Status === "S") checked="checked" @endif required>
                        <label class="custom-control-label statuslabel" for="hadir">Sedia</label>
                    </div>

                    <div class="col-sm-2">
                        <input type="radio" class="custom-control-input" id="tidak" name="Status" value="T"  @if ($T->Status === "T") checked="checked" @endif>
                        <label class="custom-control-label statuslabel" for="tidak">Tidak Sedia</label>

                    </div>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success ml-2">
	</form>
	@endforeach
    <a class="linktitle mt-4 ml-2" href="/Tugas"> Kembali</a>
    @endsection


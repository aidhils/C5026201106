@extends('layout.ceria')

@section('title', 'Tambah Tugas')
@section('isikonten')

	@section('judulHalaman','Tambah')

	<form action="/Tugas/store" method="post">
		{{ csrf_field() }}

        <div class="row form-group">
            <label for="IDPegawai" class="col-sm-1 formvar text-center">Pegawai</label>


            <select class="form-control col-sm-4" id="IDPegawai" name="IDPegawai" required="required">
                @foreach($pegawai as $p)
                    <option class="selop" value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                @endforeach
                </select>
        </div>

        <div class="row form-group">
            <label for="Tanggal" class="col-sm-1 formvar text-center" >Tanggal</label>
		    <input step="1" type="datetime-local" class="form-control col-sm-6" name="Tanggal" id="Tanggal" required="required">
        </div>

        <div class="row form-group">
            <label for="NamaTugas" class="col-lg-1 formvar text-center" >Nama Tugas</label>

            <input type="text" class="form-control col-sm-6 align-middle mt-4" name="NamaTugas" required="required" maxlength="50"></textarea>

        </div>


        <div class="row form-group">
            <label for="status" class="col-sm-1 formvar">Status</label>


            <div class="col-sm-8">
                <div class="row mt-1">
                    <div class="col-sm-2">

                        <input type="radio" class="custom-control-input" id="hadir" name="Status" value="S" required>
                        <label class="custom-control-label statuslabel" for="hadir">Sedia</label>
                    </div>

                    <div class="col-sm-2">
                        <input type="radio" class="custom-control-input" id="tidak" name="Status" value="T">
                        <label class="custom-control-label statuslabel" for="tidak">Tidak Sedia</label>

                    </div>
                </div>
            </div>
        </div>

		<input type="submit" value="Simpan Data"  class="btn btn-secondary"> <br/>
        <a class="linktitle mt-4"href="/Tugas"> Kembali</a>
	</form>

    <script>
        // window.addEventListener("load", function() {
	var now = new Date();
	var utcString = now.toISOString().substring(0,19);
	var year = now.getFullYear();
	var month = now.getMonth() + 1;
	var day = now.getDate();
	var hour = now.getHours();
	var minute = now.getMinutes();
	var second = now.getSeconds();
	var localDatetime = year + "-" +
    (month < 10 ? "0" + month.toString() : month) + "-" +
    (day < 10 ? "0" + day.toString() : day) + "T" +
    (hour < 10 ? "0" + hour.toString() : hour) + ":" +
    (minute < 10 ? "0" + minute.toString() : minute) +
    utcString.substring(16,19);
	var datetimeField = document.getElementById("Tanggal");
	datetimeField.value = localDatetime;
//});
        </script>

    @endsection


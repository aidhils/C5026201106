@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')
@section('isikonten')

	@section('judulHalaman','Tambah')
	<form action="/absen/store" method="post" >

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
                    <label for="tanggal" class="col-sm-1 formvar" >Tanggal </label>
                    <input step="1" class="form-control col-sm-6" type="datetime-local" id="tanggal" name="tanggal" required="required">

                </div>

                <div class="row form-group">
                    <label for="status" class="col-sm-1 formvar">Status</label>


                    <div class="col-sm-8">
                        <div class="row mt-1">
                            <div class="col-sm-2">

                                <input type="radio" class="custom-control-input" id="hadir" name="status" value="H" required>
                                <label class="custom-control-label statuslabel" for="hadir">HADIR</label>
                            </div>

                            <div class="col-sm-2">
                                <input type="radio" class="custom-control-input" id="tidak" name="status" value="T">
                                <label class="custom-control-label statuslabel" for="tidak">TIDAK HADIR</label>

                            </div>
                        </div>
                    </div>
                </div>


		<input type="submit" value="Simpan Data" class="btn btn-secondary"> <br/>
        <a class="linktitle mt-4" href="/absen">Kembali</a>
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
	var datetimeField = document.getElementById("tanggal");
	datetimeField.value = localDatetime;
//});
        </script>
@endsection


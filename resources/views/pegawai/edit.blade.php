   @extends('layout.ceria')

    @section('title', 'EDIT PEGAWAI')
    @section('isikonten')

        @section('judulHalaman','Edit')
        @foreach($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="pegawai_id" value="{{ $p->pegawai_id}}">
            <div class="row form-group">

                <label for="nama" class="col-sm-1 formvar text-center">
                    Nama
                </label>

                <input type="text" class="form-control col-sm-4" name="nama" required="required"  value="{{ $p->pegawai_nama }}"> <br/>

            </div>

            <div class="row form-group">
                <label for="jabatan" class="col-sm-1 formvar text-center">
                    Jabatan
                </label>
                    <input type="text" class="form-control col-sm-4" name="jabatan" required="required"  value="{{ $p->pegawai_jabatan }}">
            </div>

            <div class="row form-group">
                <label for="umur" class="col-sm-1 formvar text-center">
                Umur
                </label>
                <input type="number" class="form-control col-sm-4" name="umur" required="required" value="{{ $p->pegawai_umur }}">

            </div>

            <div class="row form-group">
                <label for="Alamat" class="col-sm-1 formvar text-center">
                Alamat
                </label>
             <textarea name="alamat"  class="form-control col-sm-4"  required="required"  >{{ $p->pegawai_alamat}}</textarea>
            </div>


            <input type="submit" value="Simpan Data" class="btn btn-success ml-2"> <br/>
            <a class="linktitle mt-4 ml-2" href="/pegawai">Kembali</a>

        </form>
        @endforeach

        @endsection

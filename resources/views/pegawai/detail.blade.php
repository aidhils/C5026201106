@extends('layout.ceria')

@section('title', 'Detail Pegawai')
@section('isikonten')



	@section('judulHalaman','Detail Pegawai')

	@foreach($pegawai as $p)

		{{ csrf_field() }}
        <table class="table table-bordered">
		<tr>
		<td class="detailtitle text-right">Nama</td>
        <td class="detailisi"> {{ $p->pegawai_nama }} </td>
        </tr>
        <tr>
        <td class="detailtitle text-right">Jabatan</td>
        <td class="detailisi"> {{ $p->pegawai_jabatan }} </td>
        </tr>
        <tr>
        <td class="detailtitle text-right">Umur</td>
        <td class="detailisi"> {{ $p->pegawai_umur }}</td>
        </tr>
        <tr>
         <td class="detailtitle text-right">Alamat</td>
         <td class="detailisi"> {{ $p->pegawai_alamat }}</td>
        </tr>
        </table>
	@endforeach
    <a href="/pegawai" class="btn btn-dark"> Kembali</a>
    @endsection

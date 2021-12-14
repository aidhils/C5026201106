@extends('layout.ceria')

@section('title', 'Detail Absen')
@section('isikonten')



	@section('judulHalaman','Detail Absen')

	@foreach($absen as $a)

		{{ csrf_field() }}
        <table class="table table-bordered">
		<tr>
		<td class="detailtitle text-right">Nama</td>
        <td class="detailisi"> {{ $a -> pegawai_nama }} </td>
        </tr>
        <tr>
        <td class="detailtitle text-right">Jabatan</td>
        <td class="detailisi"> {{ $a -> Tanggal }} </td>
        </tr>
        <tr>
        <td class="detailtitle text-right">Status</td>
        <td class="detailisi"> {{ $a -> Status}}</td>
        </tr>
        </table>
	@endforeach
    <a href="/absen" class="btn btn-dark"> Kembali</a>
    @endsection

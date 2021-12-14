@extends('layout.ceria')

@section('title', 'Detail Pegawai')
@section('isikonten')



	@section('judulHalaman','Detail Mobil')

	@foreach($mobil as $m)

		{{ csrf_field() }}
        <table class="table table-bordered">
		<tr>
            <td class="detailtitle text-right">Kode Mobil</td>
            <td class="detailisi">{{ $m->kodemobil }} </td>
        </tr>
        <tr>
            <td class="detailtitle text-right">Merk Mobil</td>
            <td class="detailisi">{{ $m-> merkmobil }} </td>
        </tr>
        <tr>
            <td class="detailtitle text-right">Stock Mobil</td>
            <td class="detailisi">{{ $m->stockmobil }}</td>
        </tr>
        <tr>
            <td class="detailtitle text-right">Tersedia</td>
            <td class="detailisi">{{ $m -> tersedia }}</td>
        </tr>
        </table>
	@endforeach
    <a href="/mobil" class="btn btn-dark"> Kembali</a>
    @endsection

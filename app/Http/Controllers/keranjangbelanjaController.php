<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class keranjangbelanjaController extends Controller
{
    public function index()
    {

        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);


    	// mengirim data pegawai ke view index
    	return view('keranjangbelanja.index',['keranjangbelanja' => $keranjangbelanja]);

    }

    // Search
    /*


	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
        ->orWhere('pegawai_alamat','like', "%" . $cari . "%")
		->paginate();

    	// mengirim data pegawai ke view index
		return view('pegawai.index',['pegawai' => $pegawai]);
        // menangkap data pencarian
        $cari = $request->cari;
    }
    */

    public function tambah()
    {

        // memanggil view tambah
        return view('keranjangbelanja.tambah');

    }


    public function store(Request $request)
    {

            DB::table('keranjangbelanja')->insert([
                'KodeBarang' => $request->kodebarang,
                'Jumlah' => $request->jumlah,
                'Harga' => $request->harga
            ]);

           return redirect('/keranjangbelanja');

    }




    public function edit($ID)
    {

        $keranjangbelanja= DB::table('keranjangbelanja')->where('ID',$ID)->get();
         // passing data pegawai yang didapat ke view edit.blade.php
         return view('keranjangbelanja.edit',['keranjangbelanja' => $keranjangbelanja]);

    }



    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('keranjangbelanja')->where('ID',$request-> ID)->update([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,

        ]);

        return redirect('/keranjangbelanja');
    }


    public function hapus($ID)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID',$ID)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/keranjangbelanja');
    }


}

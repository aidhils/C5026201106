<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    public function index()
    {
    	// mengambil data dari table mobil
        $mobil= DB::table('mobil')->paginate(10);


    	// mengirim data pegawai ke view index
    	return view('mobil.index',['mobil' => $mobil]);

    }

    // Search



	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;


		$mobil = DB::table('mobil')
		->where('merkmobil','like',"%".$cari."%")
		->paginate();

		return view('mobil.index',['mobil' => $mobil]);
        // menangkap data pencarian
        $cari = $request->cari;
    }


    public function tambah()
    {

        // memanggil view tambah
        return view('mobil.tambah');

    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
            // insert data ke table pegawai
            DB::table('mobil')->insert([
                'kodemobil' => $request->kodemobil,
                'merkmobil' => $request->merkmobil,
                'stockmobil' => $request->stockmobil,
                'tersedia' => $request->tersedia
            ]);
            // alihkan halaman ke halaman pegawai
           return redirect('/mobil');

    }



    // method untuk edit data pegawai
    public function edit($kodemobil)
    {
         // mengambil data pegawai berdasarkan id yang dipilih
        $mobil = DB::table('mobil')->where('kodemobil',$kodemobil)->get();
         // passing data pegawai yang didapat ke view edit.blade.php
         return view('mobil.edit',['mobil' => $mobil]);

    }



    // method untuk view detail data pegawai
    public function detail($kodemobil)
    {
         // mengambil data pegawai berdasarkan id yang dipilih
        $mobil = DB::table('mobil')->where('kodemobil',$kodemobil)->get();
         // passing data pegawai yang didapat ke view edit.blade.php
         return view('mobil.detail',['mobil' => $mobil]);

    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('mobil')->where('kodemobil',$request->kodemobil)->update([
            'kodemobil' => $request->kodemobil,
            'merkmobil' => $request->merkmobil,
            'stockmobil' => $request->stockmobil,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/mobil');
    }


    // method untuk hapus data pegawai
    public function hapus($kodemobil)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('mobil')->where('kodemobil',$kodemobil)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/mobil');
    }

}

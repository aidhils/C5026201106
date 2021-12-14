<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function index()
    {


        $absen = DB::table('absen')
        ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('absen.*', 'pegawai.pegawai_nama')
        ->paginate() ;



    	return view('absen.index',['absen' => $absen]);

    }


    public function tambah()
    {

        // memanggil view tambah
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
        return view('absen.tambah',['pegawai' => $pegawai]);

    }


    public function store(Request $request)
        {
            //DB::table()->insert();

            DB::table('absen')->insert([
                'ID' => $request->ID,
                'IDPegawai' => $request->IDPegawai,
                'Tanggal' => $request->tanggal,
                'Status' => $request->status
            ]);

            return redirect('/absen');
        }

            // method untuk view detail absen
    public function detail($id)
    {

         $absen = DB::table('absen')
         ->leftJoin('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
         ->where('ID',$id)->get();

         return view('absen.detail',['absen' => $absen]);

    }



    public function edit($ID)
    {

        $absen = DB::table('absen')->where('ID',$ID)->get();

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama','asc')->get();

        $judul = "Edit Data";


        return view('absen.edit',['absen' => $absen,'pegawai' => $pegawai,'judul' => $judul]);
    }


    public function update(Request $request)
    {
        DB::table('absen')->where('ID', $request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);
        return redirect('/absen');
    }

    public function hapus($id)
    {

        DB::table('absen')->where('ID',$id)->delete();


        return redirect('/absen');
    }
}


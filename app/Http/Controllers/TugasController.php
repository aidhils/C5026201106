<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasController extends Controller
{


                // Open
                    public function index()
                    {


                    $tugas = DB::table('Tugas')
                    ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
                    ->select('Tugas.*', 'pegawai.pegawai_nama')
                    ->paginate() ;


                        return view('tugas.index',['tugas' => $tugas]);

                    }

              // Add

                public function tambah()
                    {

                        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();
                        return view('tugas.tambah',['pegawai' => $pegawai]);
                    }

                    // Storing

                public function store(Request $request)
                {
                    DB::table('Tugas')->insert([
                        'ID' => $request-> ID,
                        'IDPegawai' => $request-> IDPegawai,
                        'Tanggal' => $request-> Tanggal,
                        'NamaTugas' => $request-> NamaTugas,
                        'Status' => $request -> Status
                    ]);

                    return redirect('/Tugas');

                }


            // Edit and update

                public function edit($ID)
                {

                    $tugas = DB::table('tugas')->where('ID',$ID)->get();

                     $pegawai = DB::table('pegawai')->orderBy('pegawai_nama','asc')->get();

                    return view('tugas.edit',['tugas' => $tugas,'pegawai' => $pegawai]);
                }

                public function update(Request $request)
                    {
                        DB::table('tugas')->where('ID', $request->id)->update([
                            'IDPegawai' => $request-> IDPegawai,
                            'Tanggal' => $request-> tanggal,
                            'NamaTugas' => $request-> NamaTugas,
                            'Status' => $request-> Status
                        ]);
                        return redirect('/Tugas');
                    }


            // Remove

                public function hapus($ID)
                {
                    // menghapus data pegawai berdasarkan id yang dipilih
                    DB::table('Tugas')->where('ID',$ID)->delete();

                    // alihkan halaman ke halaman pegawai
                    return redirect('/Tugas');
                }


}

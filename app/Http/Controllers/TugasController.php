<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TugasController extends Controller
{


                // Open
                    public function index()
                    {

                        $tugas = DB::table('tugas')->get();

                        return view('tugas.index',['tugas' => $tugas]);

                    }

              // Add

                public function tambah()
                    {


                        return view('tugas.tambah');

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

                    $Tugas = DB::table('Tugas')->where('ID',$ID)->get();

                    return view('tugas.edit',['Tugas' => $Tugas]);

                }


                public function update(Request $request)
                    {

                        DB::table('Tugas')->where('ID',$request->ID)->update([
                            'IDPegawai' => $request-> IDPegawai,
                            'Tanggal' => $request-> Tanggal,
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

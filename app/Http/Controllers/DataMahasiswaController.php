<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DataMahasiswaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $judul = 'Data Mahasiswa';

        return view('admin.body.mahasiswa')->with(compact(['mahasiswa','judul']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request);


        //untuk menambahkan ==1
        if($request->jenis_input==1)
        {
          $data_insert = [
                         'nim'            => $request->nim,
                         'email'          => $request->email,
                         'nama'           => $request->nama,
                         'prodi_id'       => $request->prodi_id,
                         'kelas'          => $request->kelas,
                         'alamat'         => $request->alamat,
                         'angkatan'       => $request->angkatan,
                         'nohp'           => $request->nohp,
                         'jenis_kelamin'  => $request->jenis_kelamin,
                         'nama_ayah'      => $request->nama_ayah,
                         'nama_ibu'       => $request->nama_ibu,
                         'alamat_ortu'    => $request->alamat_ortu,
                         'nohp_ortu'      => $request->nohp_ortu,
                         'jurusan'        => $request->jurusan,
                        ];

          if(!Mahasiswa::insert($data_insert))
          {
            return "gagal menambahkan";
          }

        }
        //untuk mengedit ==2
        elseif ($request->jenis_input==2)
        {
          $data_update = [
                         'email'          => $request->email,
                         'nama'           => $request->nama,
                         'prodi_id'       => $request->prodi_id,
                         'kelas'          => $request->kelas,
                         'alamat'         => $request->alamat,
                         'nohp'           => $request->nohp,
                         'nama_ayah'      => $request->nama_ayah,
                         'nama_ibu'       => $request->nama_ibu,
                         'alamat_ortu'    => $request->alamat_ortu,
                         'nohp_ortu'      => $request->nohp_ortu,
                         'jurusan'        => $request->jurusan,
                        ];

          if(!Mahasiswa::where('nim',$request->nim)->update($data_update))
          {
            return "gagal mengubah data";
          }
        }
        //untuk MENGHAPUS ==3
        elseif ($request->jenis_input==3)
        {
            if(!Mahasiswa::where('nim',$request->nim)->delete())
            {
              return "gagal hapus";
            }
        }


        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

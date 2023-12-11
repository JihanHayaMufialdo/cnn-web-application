<?php

namespace App\Http\Controllers\web\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KelasRequest;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\User;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::get();
        // $user = [];
        $data = [
            'data_kelas'  => $kelas,
            'title_page'   => 'Daftar Kelas'
        ];

        return view('web.list-kelas-pages.daftar-kelas-admin', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'mata_kuliah'  => MataKuliah::get(),
            'dosen'        => User::where('role','dosen')->get(),
            'title_page'   => 'Tambah Data Kelas'
        ];

        return view('web.list-kelas-pages.form-tambah-kelas', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KelasRequest $request)
    {
        $data = $request->validated();

        $kelas = new Kelas($data);
        $kelas->id_matkul = $data['id_matkul'];
        $kelas->id_dosen = $data['id_dosen'];

        $kelas->save();

        return to_route('kelas.index')->with('success','Berhasil menambahkan kelas');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kela)
    {
        $data = [
            'kelas' => $kela,
            'mahasiswa' => Mahasiswa::get(),
            'title_page'   => 'Detail Data Kelas'
        ];

        return view('web.list-kelas-pages.detail-kelas-admin', $data);

        // $kelas = Kelas::findOrFail($kela);

        // return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kela)
    {
        $data = [
            'kelas' => $kela,
            'title_page'   => 'Ubah Data Kelas'
        ];

        return view('web.list-kelas-pages.form-edit-kelas', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(KelasRequest $request, Kelas $kela)
    {
        $data =$request->validated();

        $kela->update($data);

        return to_route('kelas.index')->with('success','Berhasil mengubah data kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kela)
    {
        $kela->delete();

        return redirect()->route('kelas.index')->with('success', 'Berhasil menghapus data kelas');
    }
}

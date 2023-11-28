<?php

namespace App\Http\Controllers\web\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KelasRequest;
use App\Models\Kelas;
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
        return view('web.list-kelas-pages.form-tambah-kelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KelasRequest $request)
    {
        // $data = $request->validate([
        //     'matakuliah' => 'required|exists:mata_kuliah,id',
        //     'dosen' => 'required|exists:users,id'
        // ]);

        // $kelas = new Kelas($data);
        // $kelas->id_matkul = $request->input('matakuliah');
        // $kelas->id_dosen = $request->input('id_dosen');

        // $kelas->save();

        // return to_route('kelas.index')->with('success','Berhasil menambahkan kelas');
        $data = $request->validated();

        $kelas = new Kelas($data);
        $kelas->id_matkul = $data['id_matkul'];
        $kelas->id_dosen = $data['id_dosen'];

        $kelas->save();

        return redirect()->route('kelas.index')->with('success', 'Berhasil menambahkan kelas');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        $data = [
            'kelas' => $kelas
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
    public function update(KelasRequest $request, Kelas $kelas)
    {
        $data =$request->validated();

        $kelas->update($data);

        return to_route('kelas.index')->with('success','Berhasil mengubah data kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}

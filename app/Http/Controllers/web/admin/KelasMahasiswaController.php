<?php

namespace App\Http\Controllers\web\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KelasMahasiswaRequest;
use App\Models\KelasMahasiswa;
use Illuminate\Http\Request;

class KelasMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(KelasMahasiswaRequest $request)
    {
        $data = $request->validated();

        $kelas = new KelasMahasiswa($data);
        $kelas->id_mahasiswa = $data['id_mahasiswa'];
        $kelas->id_kelas = $data['id_kelas'];

        $kelas->save();

        return redirect()->route('kelas.index')->with('success', 'Berhasil menambahkan mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KelasMahasiswa  $kelasMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(KelasMahasiswa $kelasMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelasMahasiswa  $kelasMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(KelasMahasiswa $kelasMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelasMahasiswa  $kelasMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasMahasiswa $kelasMahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelasMahasiswa  $kelasMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasMahasiswa $kelasMahasiswa)
    {
        //
    }
}

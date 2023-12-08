<?php

namespace App\Http\Controllers\web\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MahasiswaRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::get();

        $data = [
            'data_mahasiswa'  => $mahasiswa,
            'title_page'   => 'Daftar Mahasiswa'
        ];

        return view('web.list-mahasiswa-pages.mahasiswa-index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title_page'   => 'Tambah Data Mahasiswa'
        ];

        return view('web.list-mahasiswa-pages.mahasiswa-create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaRequest $request)
    {
        $data = ($request->validated());

        $mahasiswa = new Mahasiswa($data);

        $mahasiswa->save();

        return to_route('mahasiswa.index')->with('success', 'Berhasil menambahkan mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $data = [
            'data_mahasiswa' => $mahasiswa,
            'title_page' => 'Edit Data Mahasiswa'
        ];

        return view('web.list-mahasiswa-pages.mahasiswa-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $data = $request->validated();
        $mahasiswa->update($data);

        return to_route('mahasiswa.index')->with('success', 'Berhasil mengubah data mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return to_route('mahasiswa.index')->with('success', 'Berhasil menghapus mahasiswa');

    }
}

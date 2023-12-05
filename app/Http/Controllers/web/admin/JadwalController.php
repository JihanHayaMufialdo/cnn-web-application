<?php

namespace App\Http\Controllers\web\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JadwalRequest;
use App\Models\Jadwal;
use Illuminate\Http\Request;
// use Carbon\Carbon;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::get();

        $data = [
            'data_jadwal'  => $jadwal,
            'title_page'   => 'Daftar Jadwal'
        ];

        return view('web.list-jadwal-pages.jadwal-index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title_page' => 'Tambah Data Jadwal'
        ];

        return view('web.list-jadwal-pages.jadwal-create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JadwalRequest $request)
    {
        $data = $request->validated();

        $jadwal = new Jadwal($data);
        $jadwal->id_kelas = $data['id_kelas'];

        $jadwal->save();

        return to_route('jadwal.index')->with('success','Berhasil menambahkan jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        $data = [
            'jadwal' => $jadwal,
            'title_page' => 'Tambah Data Jadwal'
        ];

        return view('web.list-jadwal-pages.jadwal-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(JadwalRequest $request, Jadwal $jadwal)
    {
        $data = $request->validated();

        $jadwal->update($data);

        return to_route('jadwal.index')->with('success','Berhasil mengubah data jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Berhasil menghapus data jadwal');
    }
}

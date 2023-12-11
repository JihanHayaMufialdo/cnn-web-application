<?php

namespace App\Http\Controllers\web\dosen;

use App\Http\Controllers\Controller;
use App\Http\Requests\PertemuanRequest;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Pertemuan;
use Illuminate\Http\Request;

class PertemuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Kelas $dosen_kela)
    {
        $pertemuan = Pertemuan::where('id_kelas', $dosen_kela->id)->get();

        $data = [
            'pertemuan' => $pertemuan,
            'kelas' => $dosen_kela,
            'title_page' => 'Detail Kelas'
        ];

        return view('web.list-kelas-pages.detail-kelas-dosen', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Kelas $dosen_kela)
    {
        // $jadwal = Jadwal::where(['id_kelas' => $dosen_kela->id, 'jenis' => $jenis])->get();

        $data = [
            // 'mata_kuliah'  => MataKuliah::get(),
            // 'dosen'        => User::where('role','dosen')->get(),
            // 'jadwal' => $jadwal,
            'kelas' => $dosen_kela,
            'jenis' => Jadwal::getJenisValues(),
            'ruangan'   => Jadwal::getRuanganValues(),
            'status' => Pertemuan::getStatusValues(),
            'title_page'   => 'Tambah Pertemuan'
        ];

        return view('web.list-kelas-pages.form-tambah-pertemuan', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PertemuanRequest $request, Kelas $dosen_kela)
    {
        // dd($request->validated());
        $data = $request->validated();

        $pertemuan = new Pertemuan($data);
        $pertemuan->id_kelas = $dosen_kela->id;
        $pertemuan->save();

        return to_route('dosen-kelas.dosen-pertemuan.index', ['dosen_kela' => $dosen_kela->id])->with('success','Berhasil menambahkan pertemuan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pertemuan  $pertemuan
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $dosen_kela, Pertemuan $dosen_pertemuan)
    {
        $data = [
            'pertemuan' => $dosen_pertemuan,
            'kelas' => $dosen_kela,
            'title_page'   => 'Detail Data Pertemuan'
        ];

        return view('web.list-kelas-pages.detail-pertemuan-dosen', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pertemuan  $dosen_pertemuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $dosen_kela, Pertemuan $dosen_pertemuan)
    {
        // dd($dosen_pertemuan);
        $data = [
            'pertemuan' => $dosen_pertemuan,
            'kelas' => $dosen_kela,
            'jenis' => Jadwal::getJenisValues(),
            'ruangan' => Jadwal::getRuanganValues(),
            'status' => Pertemuan::getStatusValues(),
            'title_page'   => 'Ubah Data Pertemuan'
        ];

        return view('web.list-kelas-pages.form-edit-pertemuan', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pertemuan  $pertemuan
     * @return \Illuminate\Http\Response
     */
    public function update(PertemuanRequest $request, Kelas $dosen_kela, Pertemuan $dosen_pertemuan)
    {
        $data = $request->validated();

        $dosen_pertemuan->update($data);

        return to_route('dosen-kelas.dosen-pertemuan.index', ['dosen_kela' => $dosen_kela->id])->with('success','Berhasil mengubah data pertemuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pertemuan  $pertemuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $dosen_kela, Pertemuan $dosen_pertemuan)
    {
        $dosen_pertemuan->delete();

        return to_route('dosen-kelas.dosen-pertemuan.index', ['dosen_kela' => $dosen_kela->id])->with('success','Berhasil menghapus pertemuan');
    }
}

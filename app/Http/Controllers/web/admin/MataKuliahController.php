<?php

namespace App\Http\Controllers\web\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MataKuliahRequest;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliah = MataKuliah::get();
        // $user = [];
        $data = [
            'mata_kuliah'  => $matakuliah,
        ];

        return view('web.list-matkul-pages.matkul-index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.list-matkul-pages.matkul-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MataKuliahRequest $request)
    {
        $data = $request->validated();

        $mataKuliah = new MataKuliah($data);

        $mataKuliah->save();

        return to_route('matakuliah.index')->with('success','Berhasil menambahkan mata kuliah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function show(MataKuliah $matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(MataKuliah $matakuliah)
    {
        // dd($matakuliah);
        $data = [
            'matakuliah' => $matakuliah
        ];

        return view('web.list-matkul-pages.matkul-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function update(MataKuliahRequest $request, MataKuliah $matakuliah)
    {
        // dd($request->validated());
        $data =$request->validated();

        $matakuliah->update($data);

        return to_route('matakuliah.index')->with('success','Berhasil mengubah data mata kuliah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MataKuliah  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataKuliah $matakuliah)
    {
        $matakuliah->delete();

        return to_route('matakuliah.index')->with('success','Berhasil menghapus data mata kuliah');
    }
}

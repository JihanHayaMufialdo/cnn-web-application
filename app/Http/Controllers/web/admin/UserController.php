<?php

namespace App\Http\Controllers\web\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('role', 'dosen')->select('id','nama','nip')->get();
        // $user = [];
        $data = [
            'data_dosen'  => $user,
            'title_page'  => 'Daftar Akun'
        ];

        return view('web.list-akun-pages.daftar-akun', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title_page'  => 'Tambah Data Akun'
        ];
        return view('web.list-akun-pages.form-tambah-akun', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        // dd($request->validated());
        $data = $request->validated();

        $data['password'] = bcrypt($data['password']);

        $user = new User($data);

        $user->save();

        return to_route('user.index')->with('success','Berhasil menambahkan akun dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data = [
            'user' => $user,
            'title_page' => 'Ubah Data Akun'
        ];

        return view('web.list-akun-pages.form-edit-akun', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $data =$request->validated();

        $user->update($data);

        return to_route('user.index')->with('success','Berhasil mengubah data dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return to_route('user.index')->with('success','Berhasil menghapus data dosen');
    }
}

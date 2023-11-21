<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function(){
    return view('web.dashboards.dashboard-dosen');
})->name('dosen-dashboard');

Route::get('/admin', function(){
    return view('web.dashboards.dashboard-admin');
})->name('admin-dashboard');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'login_attempt'])->name('login-attempt');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', function(){
    return view('web.login');
})->name('login');

Route::get('/admin/daftar-akun', function(){
    return view('web.list-akun-pages.daftar-akun');
})->name('daftar-akun');

Route::get('/admin/daftar-akun/form-tambah-akun', function(){
    return view('web.list-akun-pages.form-tambah-akun');
})->name('form-tambah-akun');

Route::get('/admin/daftar-akun/form-edit-akun', function(){
    return view('web.list-akun-pages.form-edit-akun');
})->name('form-edit-akun');

Route::get('/admin/daftar-kelas', function(){
    return view('web.list-kelas-pages.daftar-kelas-admin');
})->name('admin.daftar-kelas');

Route::get('/admin/daftar-kelas/detail-kelas', function(){
    return view('web.list-kelas-pages.detail-kelas-admin');
})->name('admin.detail-kelas');

Route::get('/admin/daftar-kelas/detail-kelas/tambah-pertemuan', function(){
    return view('web.list-kelas-pages.form-tambah-pertemuan');
})->name('admin.tambah-pertemuan');

Route::get('/admin/daftar-kelas/detail-kelas/edit-pertemuan', function(){
    return view('web.list-kelas-pages.form-edit-pertemuan');
})->name('admin.edit-pertemuan');

Route::get('/admin/daftar-kelas/tambah-kelas', function(){
    return view('web.list-kelas-pages.form-tambah-kelas');
})->name('admin.tambah-kelas');

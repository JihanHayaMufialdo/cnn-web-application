<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\web\admin\UserController;
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

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login_attempt'])->name('login-attempt');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::get('/admin/daftar-akun', function () {
    $data = ['title_page' => 'Daftar Akun'];
    return view('web.list-akun-pages.daftar-akun', $data);
})->name('daftar-akun');

Route::get('/admin/daftar-akun/form-tambah-akun', function () {
    return view('web.list-akun-pages.form-tambah-akun');
})->name('form-tambah-akun');

Route::get('/dosen', function(){
    $data = ['title_page' => 'Dashboard'];
    return view('web.dashboards.dashboard-dosen', $data);
})->name('dosen-dashboard');

Route::get('/admin', function(){
    $data = ['title_page' => 'Dashboard'];
    return view('web.dashboards.dashboard-admin', $data);
})->name('admin-dashboard');

Route::resources([
    'admin/user' => UserController::class,
]);

// Route::controller(UserController::class)->group(function(){
//     Route::get('/admin/daftar-akun', 'index')->name('daftar-akun');
// });

// Route::get('/admin/daftar-akun/form-tambah-akun', function(){
//     return view('web.admin-pages.form-tambah-akun');
// })->name('form-tambah-akun');

Route::get('/admin/daftar-akun/form-edit-akun', function(){
    return view('web.list-akun-pages.form-edit-akun');
})->name('form-edit-akun');

Route::get('/admin/daftar-kelas', function(){
    $data = ['title_page' => 'Daftar Kelas'];
    return view('web.list-kelas-pages.daftar-kelas-admin', $data);
})->name('admin.daftar-kelas');

Route::get('/dosen/daftar-kelas', function(){
    $data = ['title_page' => 'Daftar Kelas'];
    return view('web.list-kelas-pages.daftar-kelas-dosen', $data);
})->name('dosen.daftar-kelas');

Route::get('/admin/daftar-kelas/detail-kelas', function(){
    $data = ['title_page' => 'Daftar Kelas'];
    return view('web.list-kelas-pages.detail-kelas-admin', $data);
})->name('admin.detail-kelas');

Route::get('/dosen/daftar-kelas/detail-kelas', function(){
    $data = ['title_page' => 'Daftar Kelas'];
    return view('web.list-kelas-pages.detail-kelas-dosen', $data);
})->name('dosen.detail-kelas');

Route::get('/dosen/daftar-kelas/detail-kelas/tambah-pertemuan', function(){
    $data = ['title_page' => 'Daftar Kelas'];
    return view('web.list-kelas-pages.form-tambah-pertemuan', $data);
})->name('tambah-pertemuan');

Route::get('/dosen/daftar-kelas/detail-kelas/edit-pertemuan', function(){
    $data = ['title_page' => 'Daftar Kelas'];
    return view('web.list-kelas-pages.form-edit-pertemuan', $data);
})->name('edit-pertemuan');

Route::get('/dosen/daftar-kelas/detail-kelas/edit-pertemuan/rekam-kehadiran', function(){
    $data = ['title_page' => 'Daftar Kelas'];
    return view('web.list-kelas-pages.rekam-kehadiran', $data);
})->name('rekam-kehadiran');

Route::get('/dosen/daftar-kelas/detail-kelas/mahasiswa-kelas', function(){
    $data = ['title_page' => 'Daftar Kelas'];
    return view('web.list-kelas-pages.mahasiswa-kelas', $data);
})->name('mahasiswa-kelas');

Route::get('/admin/daftar-kelas/tambah-kelas', function(){
    return view('web.list-kelas-pages.form-tambah-kelas');
})->name('admin.tambah-kelas');

Route::get('/admin/daftar-kelas/edit-kelas', function(){
    return view('web.list-kelas-pages.form-edit-kelas');
})->name('admin.edit-kelas');

Route::get('/admin/daftar-mahasiswa', function(){
    return view('web.list-mahasiswa-pages.daftar-mahasiswa');
})->name('admin.daftar-mahasiswa');

Route::get('/admin/daftar-mahasiswa/tambah-mahasiswa', function(){
    return view('web.list-mahasiswa-pages.form-tambah-mahasiswa');
})->name('admin.tambah-mahasiswa');

Route::get('/admin/daftar-mahasiswa/edit-mahasiswa', function(){
    return view('web.list-mahasiswa-pages.form-edit-mahasiswa');
})->name('admin.edit-mahasiswa');

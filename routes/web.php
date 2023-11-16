<?php

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

Route::get('/login', function(){
    return view('web.login');
})->name('login');

Route::get('/admin/daftar-akun', function(){
    return view('web.admin-pages.daftar-akun');
})->name('daftar-akun');

Route::get('/admin/daftar-akun/form-tambah-akun', function(){
    return view('web.admin-pages.form-tambah-akun');
})->name('form-tambah-akun');

Route::get('/admin/daftar-akun/form-edit-akun', function(){
    return view('web.admin-pages.form-edit-akun');
})->name('form-edit-akun');

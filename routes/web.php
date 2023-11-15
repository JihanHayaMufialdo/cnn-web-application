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
    return view('web.dashboards.dashboard');
})->name('dosen-dashboard');

Route::get('/admin', function () {
    return view('welcome');
})->name('admin-dashboard');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'login_attempt'])->name('login-attempt');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

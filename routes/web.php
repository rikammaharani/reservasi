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

Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('landing.page');

// Google Login
Route::get('/auth/google', [App\Http\Controllers\OAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [App\Http\Controllers\OAuthController::class, 'googleCallback'])->name('google.callback');
// END Google Login

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Data User
Route::get('/admin/data', [App\Http\Controllers\UserController::class, 'index'])->name('admin.data');
Route::post('/admin/store', [App\Http\Controllers\UserController::class, 'store'])->name('admin.store');
Route::get('admin/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.edit');
Route::post('admin/update', [App\Http\Controllers\UserController::class, 'update'])->name('admin.update');
Route::post('admin/adminpass', [App\Http\Controllers\UserController::class, 'adminpass'])->name('admin.password');
// END Data User

//Pasien
Route::get('/pasien', [App\Http\Controllers\PasienController::class, 'index'])->name('index.pasien');
Route::get('/pasien/create', [App\Http\Controllers\PasienController::class, 'create'])->name('create.pasien');
Route::post('/pasien/store', [App\Http\Controllers\PasienController::class, 'store'])->name('store.pasien');
Route::get('/pasien/{id}/show', [App\Http\Controllers\PasienController::class, 'show'])->name('show.pasien');
Route::get('/pasien/{id}/edit', [App\Http\Controllers\PasienController::class, 'edit'])->name('edit.pasien');
Route::put('/pasien/{id}/update', [App\Http\Controllers\PasienController::class, 'update'])->name('update.pasien');
Route::get('/pasien/{id}/destroy', [App\Http\Controllers\PasienController::class, 'destroy'])->name('destroy.pasien');

//Reservasi
Route::get('/admin/reservasi', [App\Http\Controllers\ReservasiController::class, 'index'])->name('index.reservasi');
Route::get('/admin/reservasi/create', [App\Http\Controllers\ReservasiController::class, 'create'])->name('create.reservasi');
Route::post('/admin/reservasi/store', [App\Http\Controllers\ReservasiController::class, 'store'])->name('store.reservasi');
Route::get('/admin/reservasi/{id}/show', [App\Http\Controllers\ReservasiController::class, 'show'])->name('show.reservasi');
Route::get('/admin/reservasi/{id}/edit', [App\Http\Controllers\ReservasiController::class, 'edit'])->name('edit.reservasi');
Route::put('/admin/reservasi/{id}/update', [App\Http\Controllers\ReservasiController::class, 'update'])->name('update.reservasi');
Route::get('/admin/reservasi/{id}/destroy', [App\Http\Controllers\ReservasiController::class, 'destroy'])->name('destroy.reservasi');

//Jadwal
Route::get('/admin/jadwal', [App\Http\Controllers\JadwalController::class, 'index'])->name('index.jadwal');
Route::get('/admin/jadwal/create', [App\Http\Controllers\JadwalController::class, 'create'])->name('create.jadwal');
Route::post('/admin/jadwal/store', [App\Http\Controllers\JadwalController::class, 'store'])->name('store.jadwal');
Route::get('/admin/jadwal/{id}/destroy', [App\Http\Controllers\JadwalController::class, 'destroy'])->name('destroy.jadwal');
Route::get('/admin/jadwal/importExcel', [App\Http\Controllers\JadwalController::class, 'importExcel'])->name('importExcel.jadwal');
Route::post('/admin/jadwal/import_excel', [App\Http\Controllers\JadwalController::class, 'import_excel'])->name('import_excel.jadwal');
Route::get('/admin/jadwal/export_excel', [App\Http\Controllers\JadwalController::class, 'export_excel'])->name('export_excel.jadwal');


//user
Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('index.user');
Route::get('/admin/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('create.user');
Route::post('/admin/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('store.user');
Route::get('/admin/user/{id}/show', [App\Http\Controllers\UserController::class, 'show'])->name('show.user');
Route::get('/admin/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('edit.user');
Route::put('/admin/user/{id}/update', [App\Http\Controllers\UserController::class, 'update'])->name('update.user');
Route::get('/admin/user/{id}/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('destroy.user');

//laporan
Route::get('/admin/laporan', [App\Http\Controllers\LaporanController::class, 'index'])->name('laporan');
Route::get('/report_pdf/{tglawal}/{tglakhir}', [App\Http\Controllers\LaporanController::class, 'cetak'])->name('reports.download');

//-----FRONT
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about_us');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::get('/reservasi', [App\Http\Controllers\UserReservasiController::class, 'index'])->name('reservasi');
Route::get('/reservasi/create', [App\Http\Controllers\UserReservasiController::class, 'create'])->name('usercreate.reservasi');
Route::post('/reservasi/store', [App\Http\Controllers\UserReservasiController::class, 'store'])->name('userstore.reservasi');

Route::get('/riwayat-reservasi', [App\Http\Controllers\UserReservasiController::class, 'riwayat'])->name('riwayat');

//user
Route::get('/admin/rekmed', [App\Http\Controllers\RekamMedisController::class, 'index'])->name('index.rekammedis');
Route::get('/admin/rekmed/create', [App\Http\Controllers\RekamMedisController::class, 'create'])->name('create.rekammedis');
Route::post('/admin/rekmed/store', [App\Http\Controllers\RekamMedisController::class, 'store'])->name('store.rekammedis');
Route::get('/admin/rekmed/{id}/show', [App\Http\Controllers\RekamMedisController::class, 'show'])->name('show.rekammedis');
Route::get('/admin/rekmed/{id}/edit', [App\Http\Controllers\RekamMedisController::class, 'edit'])->name('edit.rekammedis');
Route::put('/admin/rekmed/{id}/update', [App\Http\Controllers\RekamMedisController::class, 'update'])->name('update.rekammedis');
Route::get('/admin/rekmed/{id}/destroy', [App\Http\Controllers\RekamMedisController::class, 'destroy'])->name('destroy.rekammedis');

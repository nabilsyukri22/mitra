<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataMitraController;
use App\Http\Controllers\DataSurveiController;
use App\Http\Controllers\IndoregionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Spatie\Permission\Contracts\Role;

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
    return redirect('/login');
});

Route::get('/blank', function () {
    return view('sb-admin/app');
});

Route::get('/admin', [AdminController::class], 'index')
    ->name('admin')
    ->middleware('admin');

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/login', [LoginController::class, 'index'])
    ->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);


// indo region

Route::post('/getdesa', [IndoregionController::class, 'getdesa'])->name('getdesa');
Route::post('/indoregion', [IndoRegionController::class, 'store']);
Route::get('/indoregion', [IndoregionController::class, 'indoregion',])->name('indoregion');
Route::post('/getkabupaten', [IndoregionController::class, 'getkabupaten',])->name('getkabupaten');
Route::post('/getkecamatan', [IndoregionController::class, 'getkecamatan',])->name('getkecamatan');
Route::post('/getkabupaten', [MitraController::class, 'getkabupaten',])->name('getkabupaten');
Route::post('/getkecamatan', [MitraController::class, 'getkecamatan',])->name('getkecamatan');
Route::post('/getdesa', [MitraController::class, 'getdesa'])->name('getdesa');

//----------------------

Route::get('/indoregion', [MitraController::class, 'indoregion'])->name('indoregion');
Route::get('/pendaftaran', fn () => view('mitra.pendaftaran'));
Route::get('/mitra', [MitraController::class, 'index']);
Route::post('/mitra', [MitraController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('/register', [RegisterController::class, 'index']);
        Route::post('/register', [RegisterController::class, 'store']);
        Route::get('/data_admin', [DataAdminController::class, 'index'])->name('data_admin');
        Route::get('/detail/{id}', [DataAdminController::class, 'detail'])->name('detail_admin');
        Route::get('/data_user', [DataUserController::class, 'index'])->name('data_user');
        Route::get('/data_user/tambah', [DataUserController::class, 'tambah']);
        Route::post('/data_user/tambah', [DataSurveiController::class, 'store']);
    });
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Data Mitra
    Route::get('/data_mitra', [DataMitraController::class, 'index'])
        ->name('data_mitra');
    Route::get('/detail_mitra/{id}', [DataMitraController::class, 'detail',])
        ->name('detail_mitra');
    Route::post('data_mitra/delete/{id}', [DataMitraController::class, 'delete',]);

    // Data Survei
    Route::get('/data_survei', [DataSurveiController::class, 'index'])->name('data_survei');
    Route::get('/data_survei/tambah', [DataSurveiController::class, 'survei']);
    Route::post('/data_survei/store', [DataSurveiController::class, 'store']);
    Route::post('/data_survei/tambah_mitra', [DataSurveiController::class, 'tambah_mitra'])->name('tambah_mitra');
    Route::post('/data_survei/twilio', [DataSurveiController::class, 'twilio']);
    Route::get('/data_survei/penilaian/{id}', [DataSurveiController::class, 'penilaian',])->name('halaman_penilaian');
    Route::post('/data_survei/penilaian', [DataSurveiController::class, 'simpan',]);
    Route::post('/data_survei/delete/{id}', [DataSurveiController::class, 'delete']);
    Route::get('/detail_survei/{id}', [DataSurveiController::class, 'detail',])->name('detail_survei');
    Route::post('/hapus/mitra_terhubung/{id}', [DataSurveiController::class,    'hapus',]);

    // Data User
    Route::get('/detail_user/{id}', [DataUserController::class, 'detail',])->name('detail_user');
    Route::post('/user/delete/{id}', [DataUserController::class, 'hapus']);
});

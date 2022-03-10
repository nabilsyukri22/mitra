<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataMitraController;
use App\Http\Controllers\DataSurveiController;

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

Route::get('/blank', function () {
    return view('sb-admin/app');
});

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/pendaftaran', function () {
    return view('mitra.pendaftaran');
});
Route::get('/mitra', [MitraController::class, 'index']);
Route::post('/mitra', [MitraController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/data_mitra', [DataMitraController::class, 'index'])->name(
    'data_mitra'
);
Route::get('/detail_mitra/{id}', [DataMitraController::class, 'detail'])->name(
    'detail_mitra'
);

Route::get('/data_survei', [DataSurveiController::class, 'index'])->name(
    'data_survei'
);
Route::get('/detail_survei/{id}', [
    DataSurveiController::class,
    'detail',
])->name('detail_survei');

Route::get('/data_survei/survei', [DataSurveiController::class, 'survei']);
Route::post('/data_survei/store', [DataSurveiController::class, 'store']);
Route::get('/data_survei/tambah', [DataSurveiController::class, 'tambah']);
Route::post('/data_survei/tambah_mitra', [
    DataSurveiController::class,
    'tambah_mitra',
]);

Route::get('/data_mitra/edit/{id}', [DataMitraController::class], 'edit');

Route::get('/data_user', [DataUserController::class, 'index'])->name(
    'data_user'
);
Route::get('/detail_user/{id}', [DataUserController::class, 'detail'])->name(
    'detail_user'
);

Route::get('/data_admin', [DataAdminController::class, 'index'])->name(
    'data_admin'
);
Route::get('/detail/{id}', [DataAdminController::class, 'detail'])->name(
    'detail_admin'
);

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile',
    ]);
});

Route::post('data_mitra/delete/{id}', [DataMitraController::class, 'delete']);

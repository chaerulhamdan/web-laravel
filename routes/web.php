<?php
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\ListUserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//initial admin
Route::group(['middleware' => ['role']], function() {
    Route::resource('admins', DashboardAdminController::class);
    Route::resource('list', ListUserController::class);
});
// Route::resource('admins', DashboardAdminController::class);
Route::resource('aspirasi', AspirasiController::class);
Route::resource('absensi', AbsensiController::class);
Route::resource('list', ListUserController::class);
Route::get('/export-users',[ListUserController::class,'exportUsers'])->name('export-users');
Route::get('/acara/cetak_pdf',[DashboardUserController::class,'cetak_pdf'])->name('export-acara');



//initial users
Route::resource('user', DashboardUserController::class);
Route::get('/aspirasi/create',[AspirasiController::class,'create_aspirasi']);
Route::get('/users/profile',[ProfileController::class,'index']);
//kirim data db

//Acara
Route::resource('acara', AcaraController::class);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('home')->middleware('role');

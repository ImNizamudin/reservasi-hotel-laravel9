<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\FkamarController;
use App\Http\Controllers\Admin\TipeKamarController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\KamarListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Resepsionis\BookingListController;
use App\Http\Controllers\Tamu\BookingController;
use App\Http\Controllers\Tamu\MyBookingList;
use Illuminate\Support\Facades\App;


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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Contact"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog"
    ]);
});

Route::get('/infoBlog', function () {
    return view('infoBlog', [
        "title" => "Info Blog"
    ]);
});

Route::get('/tipeKamar', [KamarListController::class, 'index']);
Route::get('/tipeKamar/{id:id}', [KamarListController::class, 'show']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');


Route::get('/admin', [AdminDashboardController::class, 'index'])->middleware(['auth', 'admin']);
Route::resource('/admin/fasilitas-kamar', FkamarController::class)->except('show')->middleware(['auth', 'admin']);
Route::resource('/admin/tipe-kamar', TipeKamarController::class)->except('show')->middleware(['auth', 'admin']);


Route::get('/resepsionis', [BookingListController::class, 'index'])->middleware(['auth', 'resepsionis']);
Route::post('/resepsionis', [BookingListController::class, 'search'])->middleware(['auth', 'resepsionis']);
Route::post('/resepsionis/bayar', [BookingListController::class, 'bayar'])->middleware(['auth', 'resepsionis']);
Route::post('/resepsionis/checkin', [BookingListController::class, 'checkin'])->middleware(['auth', 'resepsionis']);
Route::post('/resepsionis/checkout', [BookingListController::class, 'checkout'])->middleware(['auth', 'resepsionis']);


Route::get('/laporan', [LaporanController::class, 'index'])->middleware(['auth', 'admindanresepsionis']);


Route::get('/booking/{id:id}', [BookingController::class, 'createID'])->middleware(['auth', 'user']);
// Route::get('/booking', [BookingController::class, 'create'])->middleware(['auth', 'user']);
Route::post('/booking', [BookingController::class, 'store'])->middleware(['auth', 'user']);
Route::post('/booking/batalkan', [BookingController::class, 'batalkan'])->middleware(['auth', 'user']);
Route::get('/mybookinglist/{user_id}', [MyBookingList::class, 'show'])->middleware(['auth', 'user']);
Route::get('/mybookinglist-print/{id}', [MyBookingList::class, 'print'])->middleware(['auth', 'user']);


// buat middleware auth ke specific url(get) misal : /booking/create
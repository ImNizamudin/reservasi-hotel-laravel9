<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Fkamar;
use App\Http\Controllers\Admin\FkamarController;
use App\Http\Controllers\Admin\TipeKamarController;
use App\Http\Controllers\FasilitasKamarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Resepsionis\BookingListController;
use App\Http\Controllers\Tamu\BookingController;
use App\Http\Controllers\Tamu\KamarListController;
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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak',[
        "title" => "Contact"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery',[
        "title" => "Gallery"
    ]);
});

Route::get('/tipeKamar', [KamarListController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');




Route::get('/admin', [AdminDashboardController::class, 'index'])->middleware(['auth', 'admin']);
Route::resource('/admin/fasilitas-kamar', FkamarController::class)->except('show')->middleware(['auth', 'admin']);
Route::resource('/admin/tipe-kamar', TipeKamarController::class)->except('show')->middleware(['auth', 'admin']);


Route::get('/resepsionis', [BookingListController::class, 'index'])->middleware(['auth', 'resepsionis']);




Route::resource('booking', BookingController::class)->middleware(['auth', 'user']);



// buat middleware auth ke specific url(get) misal : /booking/create
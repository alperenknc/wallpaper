<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\KullaniciController;
use App\Http\Controllers\Back\icerikController;
use App\Http\Controllers\Back\kategoriController;

Route::middleware('isAdmin')->group(function () {
    Route::get('/panel',[AuthController::class, 'index'])->name('admin.panel');
    Route::get('/cikis', [AuthController::class, 'logout'])->name('admin.logout');
    Route::resource('kategori', kategoriController::class);
    Route::resource('icerikler', icerikController::class);
});

Route::middleware('isLogin')->group(function () {
    Route::get('/admin/login',[AuthController::class, 'login'])->name('admin.login');
    Route::post('/admin/login',[AuthController::class, 'loginpost'])->name('admin.login.post');
});

// user login 
Route::get('/', [HomeController::class, 'index'])->name('front.index');



Route::get('/login',[LoginController::class, 'login_form'])->name('login');
Route::post('/login',[LoginController::class, 'login'])->name('login.post');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/register',[LoginController::class, 'logregisterin'])->name('register');
/////
// user işlemleri
Route::middleware('kullanici')->group(function () {
Route::get('/kullanici',[KullaniciController::class, 'index'])->name('kullanici');
Route::post('/kullanici/ekle',[KullaniciController::class, 'store'])->name('kullanici_ekle');
});





Route::get('/icerikler/{slug}', [HomeController::class, 'icerik'])->name('front.icerik');

Route::get('/test', [Controller::class, 'test'])->name('front.test');



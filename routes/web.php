<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\KerusakanhpController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\AssignOp\Concat;


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
    return view('frontend.home');
});

Route::get('/service', function () {
    return view('frontend.gedget');
})->name('service');

Route::get('/service-smartphone', function () {
    return view('frontend.service-smartphone');
})->name('service-smartphone');

Route::get('/service-laptop', function () {
    return view('frontend.service-laptop');
})->name('service-laptop');

Route::get('/service-printer', function () {
    return view('frontend.service-printer');
})->name('service-printer');

Route::get('/total', function () {
    return view('frontend.service-smartphone');
})->name('total');

Route::get('/user', function () {
    return view('frontend.home');
})->name('user');

Auth::routes();
// route dengan prefix admin
Route::group(['prefix' => 'admin', 'middleware' => ['roleAdmin']], function () {
    // route dengan role admin
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/category', 'CategoryController', ['as' => 'admin']);
    Route::resource('/barang', 'BarangController', ['as' => 'admin']);
    Route::resource('/pengguna', 'PenggunaController', ['as' => 'admin']);
    Route::resource('/kerusakanhp', 'KerusakanhpController', ['as' => 'admin']);
    Route::resource('/kerusakanlaptop', 'KerusakanlaptopController', ['as' => 'admin']);
    Route::resource('/kerusakanprinter', 'KerusakanprinterController', ['as' => 'admin']);
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('admin.profile.index');
});

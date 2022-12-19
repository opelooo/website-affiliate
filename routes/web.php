<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\ProductsDetailController;
use App\Http\Controllers\AkunAdminController;
use App\Http\Controllers\DashboardProductsDetailController;
use App\Models\Products_detail;
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

Route::get('/', [BaseController::class, 'index']);

Route::get('/rekomen-audio', [ProductsDetailController::class, 'index']);

Route::get('/section-tws', [ProductsDetailController::class, 'tws']);
Route::get('/section-headset', [ProductsDetailController::class, 'headset']);
Route::get('/section-speaker', [ProductsDetailController::class, 'speaker']);
Route::get('/section-headphone', [ProductsDetailController::class, 'headphone']);
Route::get('/section-soundcard', [ProductsDetailController::class, 'soundcard']);
Route::get('/section-kable', [ProductsDetailController::class, 'kable']);
Route::get('/section-iem', [ProductsDetailController::class, 'iem']);
Route::get('/section-dac', [ProductsDetailController::class, 'dac']);
Route::get('/section-mic', [ProductsDetailController::class, 'mic']);
Route::get('/section-eartips', [ProductsDetailController::class, 'eartips']);

Route::get('/rekomen-keyboard', [BaseController::class, 'keyboard']);

Route::get('/login', [AkunAdminController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AkunAdminController::class, 'autenticate']);
Route::post('/logout', [AkunAdminController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware('auth');

Route::get('/dashboard/items/checkExcerpt', [DashboardProductsDetailController::class, 'checkExcerpt']);
Route::resource('/dashboard/items', DashboardProductsDetailController::class)->middleware('auth');


<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\ProductsDetailController;
use App\Models\BasePage;
use PhpParser\Node\Expr\Assign;
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

Route::get('/kitabAudio', [ProductsDetailController::class, 'index']);

Route::get('/kitabKeyboard', [BaseController::class, 'keyboard']);

Route::get('/login', [BaseController::class, 'login']);


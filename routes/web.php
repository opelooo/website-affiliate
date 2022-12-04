<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Assign;

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
    return view('main', [
        'name' => 'Fernanda Gunsan',
        'title' => 'Home'
    ]);
});

Route::get('/kitabAudio', function () {
    return view('kitabAudio', [
        'name' => 'Fernanda Gunsan',
        'title' => 'Kitab Audio'
    ]);
});

Route::get('/kitabKeyboard', function () {
    return view('kitabKeyboard', [
        'name' => 'Fernanda Gunsan',
        'title' => 'Kitab Keyboard'
    ]);
});

Route::get('/login', function () {
    return view('login', [
        'name' => 'Fernanda Gunsan',
        'title' => "Gunsan's Only Page"
    ]);
});


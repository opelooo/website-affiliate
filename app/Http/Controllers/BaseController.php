<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BasePage;

class BaseController extends Controller
{
    public function index() {
        $title = 'home';
        return view('main', BasePage::findPage($title));
    }

    public function audio($title = "rekomen-audio") {
        return view('rekomendasiAudio', BasePage::findPage($title));
    }
    public function keyboard($title = "rekomen-keyboard") {
        return view('rekomendasiKeyboard', BasePage::findPage($title));
    }
    public function login($title = "login") {
        return view('login', BasePage::findPage($title));
    }
}

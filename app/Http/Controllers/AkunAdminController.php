<?php

namespace App\Http\Controllers;

use App\Models\Akun_admin;
use App\Http\Requests\StoreAkun_adminRequest;
use App\Http\Requests\UpdateAkun_adminRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AkunAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login', [
            "title" => "Admin",
            "slug" => "login"
        ]);
    }

    public function autenticate(Request $request){
        $credentials = $request -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with(['loginError'=>'Login gagal!']);
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAkun_adminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAkun_adminRequest $request)
    {
        // $item_baru = $request->validate([
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);
        // $item_baru['password'] = Hash::make($item_baru['password']);
        // Akun_admin::create($item_baru);
        // return redirect('halaman web')->with('success', 'Login successfull!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akun_admin  $akun_admin
     * @return \Illuminate\Http\Response
     */
    public function show(Akun_admin $akun_admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akun_admin  $akun_admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Akun_admin $akun_admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAkun_adminRequest  $request
     * @param  \App\Models\Akun_admin  $akun_admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAkun_adminRequest $request, Akun_admin $akun_admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akun_admin  $akun_admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akun_admin $akun_admin)
    {
        //
    }
}

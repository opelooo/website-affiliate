<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Products_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardProductsDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Products_detail::where('nama_produk', 'nama');
        return view('admin.items.index', [
            'items'=>Products_detail::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required',
            'value' => 'required',
            'review' => 'required',
            'link' => 'required',
            'harga' => 'required',
            'img' => 'required',
            'type' => 'required',
            'sound_quality' => ''
        ]);

        Products_detail::create($validated);

        return redirect('/dashboard/items')->with('success', 'New item has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products_detail  $products_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Products_detail $products_detail, Request $request)
    {
        $key = Str::after($request->getPathInfo(), search:'/dashboard/items/');
        // dd($products_detail::find($key)->nama_produk);
        return View::make('admin.items.edit', [
            'item'=>$products_detail::find($key),
            'products'=>$products_detail::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products_detail  $products_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Products_detail $products_detail)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products_detail  $products_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products_detail $products_detail)
    {
        $validated = $request->validate([
            'nama_produk' => 'required',
            'value' => 'required',
            'review' => 'required',
            'link' => 'required',
            'harga' => 'required',
            'img' => 'required',
            'type' => 'required',
            'sound_quality' => ''
        ]);

        $key = Str::after($request->getPathInfo(), search:'/dashboard/items/');

        Products_detail::where('id', $key)
        ->update($validated);

        return redirect('/dashboard/items')->with('success', 'Item has beed updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products_detail  $products_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products_detail $products_detail, Request $request)
    {
        $key = Str::after($request->getPathInfo(), search:'/dashboard/items/');
        // dd($key);
        Products_detail::find($key)->delete();

        return redirect('/dashboard/items')->with('success', 'Item has been deleted!');
    }
    public function checkExcerpt(Request $request){
        $excerpt = Str::limit(strip_tags($request->review), 100);

        return response()->json(['excerpt'=>$excerpt]);
    }
}

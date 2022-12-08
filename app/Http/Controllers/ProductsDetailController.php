<?php

namespace App\Http\Controllers;

use App\Models\Products_detail;
use App\Http\Requests\StoreProducts_detailRequest;
use App\Http\Requests\UpdateProducts_detailRequest;

class ProductsDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kitabAudio', [
            "title" => "Kitab Audio",
            "name" => "Fernanda Gunsan",
            "slug" => "kitab-audio",
            "products" => Products_detail::all()
        ]);
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
     * @param  \App\Http\Requests\StoreProducts_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducts_detailRequest $request)
    {
        // protected $fillable = [
        //     'nama_produk',
        //     'value',
        //     'sound_quality',
        //     'link',
        //     'harga',
        //     'exerpt',
        //     'review',
        //     'tipe_buds',
        //     'bluetooth_codec',
        //     'battery',
        //     'sound_tuning',
        //     'img'
        // ];

        $request->validate([
            'nama_produk' => 'required',
            'value' => 'required',
            'sound_quality' => 'required',
            'link' => 'required',
            'harga' => 'required',
            'exerpt' => 'required',
            'review' => 'required',
            'tipe_buds' => 'required',
            'bluetooth_codec' => 'required',
            'battery' => 'required',
            'sound_tuning' => 'required',
            'img' => 'required'
        ]);

        $create = new Products_detail();
        $create->nama_produk =  $request->get('nama_produk');
        $create->value = $request->get('value');
        $create->sound_quality = $request->get('sound_quality');
        $create->link = $request->get('link');
        $create->harga = $request->get('harga');
        $create->exerpt = $request->get('exerpt');
        $create->review = $request->get('review');
        $create->tipe_buds = $request->get('tipe_buds');
        $create->bluetooth_codec = $request->get('bluetooth_codec');
        $create->battery = $request->get('battery');
        $create->sound_tuning = $request->get('harga');
        $create->img = $request->get('img');
        $create->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products_detail  $products_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Products_detail $products_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products_detail  $products_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Products_detail $products_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProducts_detailRequest  $request
     * @param  \App\Models\Products_detail  $products_detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProducts_detailRequest $request, Products_detail $products_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products_detail  $products_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products_detail $products_detail)
    {
        //
    }

    public function getByitemID($itemID) {
        return Products_detail::find($itemID);
    }
}
